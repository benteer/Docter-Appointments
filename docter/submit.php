<?php
include 'config.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['time'];
    $message = $_POST['doctor'];
    
    // Insert form data into the database
    $sql = "INSERT INTO form_submissions (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Thank you for your submission, $name!</h2>";
        echo "<p>We received your message:</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Access denied!";
}

$conn->close(); // Close database connection
?>
