const form = document.querySelector('#signin-form');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  if (usernameInput.value.trim() === '') {
    alert('Please enter your username.');
    return;
  }
  if (passwordInput.value.trim() === '') {
    alert('Please enter your password.');
    return;
  }
 
  form.submit();
});

