<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container label {
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
        }
        .container input, .container select {
            width: 100%;
            padding: 8px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .container .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
            
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
            
            <input type="submit" value="Register">
            
            <div class="error" id="errorMessage"></div>
        </form>
    </div>

    <script>
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
    </script>
</body>
</html>
