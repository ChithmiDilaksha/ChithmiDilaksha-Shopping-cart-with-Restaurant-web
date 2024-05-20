<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <div class="container">
        <h1>REMEKVIN RESTAURANT</h1>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.php" class="active">Contact</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="book.html">Book Table</a></li>
                <li><a href="Register.php">Registation</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="containers">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Contact Form</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="wrapper">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <center><h1 class="mb-4">Contact Us</h1></center>
                            <div id="form-message-warning" class="mb-4"></div> 
                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="full_name">Full Name</label>
                                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12"> 
                                        <div class="form-group">
                                            <label class="label" for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="#">Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="20" rows="4" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<section class="gallery_area">
  <div class="container">
    <h2 style="font-family: 'Times New Roman', Times, serif;">Our Gallery</h2> <!-- Added title above the gallery with different font family -->
    <div class="gallery">
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/1.jpeg">Image 1</a>
        <img src="photos/gallery/1.jpeg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/2.jpg">Image 2</a>
        <img src="photos/gallery/2.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/3.jpg">Image 3</a>
        <img src="photos/gallery/3.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/4.jpg">Image 4</a>
        <img src="photos/gallery/4.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/5.jpg">Image 5</a>
        <img src="photos/gallery/5.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/6.jpg">Image 6</a>
        <img src="photos/gallery/6.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/7.jpg">Image 7</a>
        <img src="photos/gallery/7.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/8.jpg">Image 8</a>
        <img src="photos/gallery/8.jpg" alt="">
      </div>
      <div class="single_gallery">
        <a class="popup-image" href="photos/gallery/9.jpg">Image 9</a>
        <img src="photos/gallery/9.jpg" alt="">
      </div>

    </div>
  </div>
</section>

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

</body>
</html>
