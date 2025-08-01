<?php
$correct_user = "admin";
$correct_pass = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correct_user && $password === $correct_pass) {
        // Optional: Redirect to another page
        // header("Location: welcome.html");
        // exit();

        echo "<h2>✅ Login Successful!</h2>";
    } else {
        echo "<h2>❌ Invalid credentials!</h2>";
        echo "<a href='login.html'>Go back</a>";
    }
} else {
    echo "<h3>Access Denied</h3>";
}
?>
