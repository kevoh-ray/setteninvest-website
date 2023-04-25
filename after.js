const form = document.querySelector('#registration-form');
const name = document.querySelector('#name');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#confirm-password');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	if (password.value !== confirmPassword.value) {
		alert("Passwords do not match");
		return;
	}

	// Code to submit registration data to server

	alert("Registration successful");
	window.location.replace("login_form.php");
});
