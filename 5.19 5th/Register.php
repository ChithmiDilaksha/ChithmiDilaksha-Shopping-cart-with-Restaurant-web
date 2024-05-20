<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="image-background">
    <img src="photos/registerbackground.jpg" id="background-image" />
</div>

<header>
    <div class="container">
        <h1>REMEKVIN RESTAURANT</h1>
        <nav>
            <ul>
                <li><a href="index.html" >HOME</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="book.html">Book Table</a></li>
                <li><a href="Register.php" class="active">Registration</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="containerRegister">
    <form id="registration-form" method="post" action="registration_process.php">
        <div class="form-group">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
        </div>
        <button type="submit" id="register-button">Register</button>
        <p class="error-message" id="register-error" style="display: none; color: red; text-align: center;">Registration is not successful</p>
    </form>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1about">About Us</h1>
            </div>
            <div class="col-md-3">
                <h2 class="footer-heading">Web Pages</h2>
                <ul class="quick-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="book_table.html">Book a Table</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 REMEKVIN. All rights reserved.</p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        $.ajax({
            type: 'POST',
            url: 'registration_process.php',
            data: $(this).serialize(),
            success: function(response) {
                if (response == 'success') {
                    // Registration successful, redirect to login page
                    window.location.href = 'Login.php';
                } else {
                    // Registration failed, display error message
                    $('#register-error').show();
                }
            }
        });
    });
});
</script>
</body>
</html>
