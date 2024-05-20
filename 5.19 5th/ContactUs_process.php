<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $full_name = mysqli_real_escape_string($conn, $_POST['full-name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    // Attempt to insert data into database
    $sql = "INSERT INTO customer (full_name, email, subject,message) VALUES ('$full_name', '$email', '$subject','$message')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        echo 'Massage Sent success';
    } else {
        // Registration failed
        echo 'error';
    }
}

// Close connection
mysqli_close($conn);
?>
