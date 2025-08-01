<?php
$correct_user = "admin";
$correct_pass = "password123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === $correct_user && $password === $correct_pass) {
    header("Location: index.html");
    exit();
  } else {
    echo "<h2>Invalid credentials! <a href='login.html'>Try again</a></h2>";
  }
} else {
  echo "<h2>Method not allowed.</h2>";
}
?>
