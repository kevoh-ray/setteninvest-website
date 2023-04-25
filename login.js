const form = document.querySelector('#login-form');
const email = document.querySelector('#email');
const password = document.querySelector('#password');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	// Code to submit login data to server

	alert("Login successful");
});
