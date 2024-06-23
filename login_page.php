<?php 
   require_once("Header.php")
?>

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

<?php 
   require_once("Footer.php")
?>
