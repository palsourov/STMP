document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('errorMessage');

    if (password !== confirmPassword) {
        event.preventDefault();
        errorMessage.textContent = 'Passwords do not match!';
    } else {
        errorMessage.textContent = '';
    }
});