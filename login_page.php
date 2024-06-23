<?php 
   require_once("Header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<div class="login">
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <input type="submit" value="Login">
        </form>
    </div>
</div>
</html>
<?php 
   require_once("Footer.php")
?>
