<?php
$correct_user = "admin";
$correct_pass = "password123";

if ($_POST['username'] === $correct_user && $_POST['password'] === $correct_pass) {
  echo "Login Successful!";
} else {
  echo "Invalid credentials!";
}
?>
