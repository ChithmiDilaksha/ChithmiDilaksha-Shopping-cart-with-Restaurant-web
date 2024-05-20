<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant"; // Changed from "studentmarksdisplaysystem" to "Restaurant" to match the database name in your SQL code

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to check if the username and password exist in the database
    $sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        session_start();
        $_SESSION['username'] = $username; // Store username in session for future use
        echo "success"; // Output success message
    } else {
        // Login failed
        echo "error"; // Output error message
    }
}

// Close connection
$conn->close();
?>
