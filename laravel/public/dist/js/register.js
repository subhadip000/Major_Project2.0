
const registerPassword = document.querySelector('form.register #password');
const registerConfirmPassword = document.querySelector('form.register #confirm-pass');

registerPassword.addEventListener('input', function () {
	registerConfirmPassword.pattern = `${this.value}`;
})