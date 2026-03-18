(function () {
    var showPasswordCheckbox = document.getElementById('show-password');
    if (!showPasswordCheckbox) {
        return;
    }

    showPasswordCheckbox.addEventListener('change', function () {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
})();

