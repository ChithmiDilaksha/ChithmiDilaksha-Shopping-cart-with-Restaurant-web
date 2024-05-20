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

// Check if form is submitted and total is greater than 0
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['total']) && $_POST['total'] > 0) {
    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);

    // Attempt to insert data into database only if total is greater than 0
    if ($total > 0) {
        $sql = "INSERT INTO `order` (username, address, phonenumber, total, date, time) VALUES ('$username', '$address', '$phonenumber', '$total', NOW(), NOW())";

        if (mysqli_query($conn, $sql)) {
            // Redirect to congrats.html upon success
            header("Location: congrats.html");
            exit(); // Ensure that no more code is executed after redirection
        } else {
            // Display an alert if there's an error
            echo '<script>alert("Error: ' . mysqli_error($conn) . '"); window.location.href = "shopping.php";</script>';
        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Redirect back to shopping.php if total is $0
    header("Location: shopping.php");
    exit();
}

// Close connection
mysqli_close($conn);
?>
