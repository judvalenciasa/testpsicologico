(function () {
    var showPasswordCheckbox = document.getElementById('show-password');
    if (!showPasswordCheckbox) {
        return;
    }

    var submitButton = document.getElementById('submit-btn');
    var registerRoute = submitButton.dataset.route;
    var feedbackBox = document.getElementById('register-feedback');
    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

    showPasswordCheckbox.addEventListener('change', function () {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

    submitButton.addEventListener('click', function (event) {
        event.preventDefault();

        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var pin = document.getElementById('pin').value.trim();
        var password = document.getElementById('password').value.trim();

        clearErrors();
        clearFeedback();

        var isValid = true;

        if (name === '') {
            showError('name', 'El nombre completo es obligatorio.');
            isValid = false;
        }

        if (!validateEmail(email)) {
            showError('email', 'El correo electrónico no es válido.');
            isValid = false;
        }

        if (pin.length < 4) {
            showError('pin', 'El pin debe tener al menos 4 caracteres.');
            isValid = false;
        }

        if (password.length < 6) {
            showError('password', 'La contraseña debe tener al menos 6 caracteres.');
            isValid = false;
        }

        if (!isValid) {
            return;
        }

        var formData = {
            name: name,
            email: email,
            pin: pin,
            password: password,
            _token: csrfToken,
        };

        fetch(registerRoute, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': formData._token,
            },
            body: JSON.stringify(formData),
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                if (data.success) {
                    showFeedback('success', 'Registro exitoso. Ya puedes iniciar sesion.');
                    clearFormFields();
                } else {
                    showFeedback('error', data.message ? data.message : 'No fue posible registrar el usuario.');
                    formData = {};
                }
            })
            .catch(function (error) {
                console.error('Error:', error);
                showFeedback('error', 'Hubo un error en la solicitud. Intentalo de nuevo.');
            });
    });

    function clearFormFields() {
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
        document.getElementById('pin').value = '';
        document.getElementById('show-password').checked = false;
        document.getElementById('password').type = 'password';
    }

    function showError(inputId, message) {
        var input = document.getElementById(inputId);
        input.style.borderColor = 'red';
        var errorElement = document.getElementById(inputId + '-error');
        errorElement.textContent = message;
        errorElement.style.color = 'red';
    }

    function clearErrors() {
        var inputs = document.querySelectorAll('.input');
        inputs.forEach(function (input) {
            input.style.borderColor = '';
        });

        var errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function (error) {
            error.textContent = '';
        });
    }

    function showFeedback(type, message) {
        if (!feedbackBox) return;

        feedbackBox.textContent = message;
        feedbackBox.hidden = false;
        feedbackBox.classList.remove('form-feedback--success', 'form-feedback--error');
        feedbackBox.classList.add(type === 'success' ? 'form-feedback--success' : 'form-feedback--error');
    }

    function clearFeedback() {
        if (!feedbackBox) return;

        feedbackBox.hidden = true;
        feedbackBox.textContent = '';
        feedbackBox.classList.remove('form-feedback--success', 'form-feedback--error');
    }

    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(email);
    }
})();

