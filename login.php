<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_user = trim($_POST['username'] ?? '');
    $input_pass = trim($_POST['password'] ?? '');
    $found = false;

    if (file_exists("creds.txt")) {
        $lines = file("creds.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            list($user, $pass) = explode(":", $line);
            if (trim($user) === $input_user && trim($pass) === $input_pass) {
                $found = true;
                break;
            }
        }

        if ($found) {
            echo "<h2 style='color:green;'>✅ Login Successful!</h2>";
        } else {
            echo "<h2 style='color:red;'>❌ Invalid username or password</h2>";
        }
    } else {
        echo "<h3 style='color:red;'>⚠️ creds.txt not found</h3>";
    }
} else {
    echo "<h3>⛔ Direct access not allowed</h3>";
}
?>
