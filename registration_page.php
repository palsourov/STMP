<?php 
   require_once("Header.php")
?>

<div class="loginform">
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
    </div>

    
<?php 
   require_once("Footer.php")
?>
