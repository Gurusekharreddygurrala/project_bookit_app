<?php
$correct_user = "admin";
$correct_pass = "password123";

// Check if form is submitted with POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_user && $password === $correct_pass) {
        echo "✅ Login Successful!";
    } else {
        echo "❌ Invalid credentials!";
    }
} else {
    // Prevent direct access via GET
    http_response_code(405); // Method Not Allowed
    echo "405 - Method Not Allowed";
}
?>
