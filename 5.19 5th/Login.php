<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
  <div id="image-background">
    <img src="photos/login.jpg" id="background-image" alt="Login Background">
  </div>
  <header>
    <div class="container">
      <h1>REMEKVIN RESTAURANT</h1>
      <nav>
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="book.html">Book Table</a></li>
          <li><a href="Register.php">Registation</a></li>
          <li><a href="Login.html" class="active">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Login form -->
  <div class="containerRegister">
    <h2>Login Form</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <div class="password-container">
          <input type="password" id="password" name="password" placeholder="Enter Password" required>
          <i class="fas fa-eye" id="togglePassword"></i>
        </div>
      </div>
      <button type="submit" id="register-button" >Login</button>
      <p class="error-message" id="loginError" style="display: none;">Invalid Username or Password</p>
    </form>
  </div>

  <!-- Footer -->
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

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Custom JavaScript -->
  <script>
    $(document).ready(function() {
      // Submit form via AJAX
      $('#loginForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        $.ajax({
          type: 'POST',
          url: 'login_process.php',
          data: $(this).serialize(),
          success: function(response) {
            if (response == 'success') {
              alert('Login successful!');
              window.location.href = 'shopping.php'; // Redirect to menu page
            } 
            else {
              $('#loginError').show(); // Show the error message
            }
          }
        });
      });

      // Toggle password visibility
      $('#togglePassword').click(function() {
        var passwordField = $('#password');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
          passwordField.attr('type', 'text');
          $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
          passwordField.attr('type', 'password');
          $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        }
      });
    });
  </script>
</body>
</html>
