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
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

    // Attempt to insert data into database
    $sql = "INSERT INTO customer (full_name, username, password, address, email, phone_number) VALUES ('$full_name', '$username', '$password', '$address', '$email', '$phone_number')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        echo 'success';
    } else {
        // Registration failed
        echo 'error';
    }
}

// Close connection
mysqli_close($conn);
?>
