(function () {
    var swiper = new Swiper('.mySwiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
    });

    var sendButton = document.getElementById('send-btn');
    if (!sendButton) {
        return;
    }

    var formRoute = sendButton.dataset.route;
    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

    sendButton.addEventListener('click', function (event) {
        event.preventDefault();

        var formData = getFormData();
        clearErrors();

        if (!validateForm(formData)) {
            return;
        }

        sendContactForm(formData);
    });

    function getFormData() {
        return {
            nombre: document.getElementById('nombre').value.trim(),
            email: document.getElementById('email').value.trim(),
            message: document.getElementById('message').value.trim(),
        };
    }

    function validateForm(formData) {
        var isValid = true;

        if (!validateEmail(formData.email)) {
            showError(
                document.getElementById('email'),
                'El correo electrónico no es válido.'
            );
            isValid = false;
        }

        if (formData.nombre === '') {
            showError(
                document.getElementById('nombre'),
                'Este campo es obligatorio.'
            );
            isValid = false;
        }

        if (formData.message === '') {
            showError(
                document.getElementById('message'),
                'Este campo es obligatorio.'
            );
            isValid = false;
        }

        return isValid;
    }

    function sendContactForm(formData) {
        fetch(formRoute, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify(formData),
        })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                if (data.success) {
                    alert('Correo enviado exitosamente.');
                    clearFormFields();
                } else {
                    alert('Error al enviar el correo: ' + data.message);
                }
            })
            .catch(function (error) {
                console.error('Error:', error);
                alert('Hubo un error en la solicitud. Inténtalo de nuevo.');
            });
    }

    function clearFormFields() {
        document.getElementById('nombre').value = '';
        document.getElementById('email').value = '';
        document.getElementById('message').value = '';
    }

    function showError(input, message) {
        input.style.borderColor = 'red';
        var errorElement = document.getElementById(input.id + '-error');
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

    function validateEmail(email) {
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }
})();

