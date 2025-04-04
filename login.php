<?php
session_start();

$credentials = [
    "group7" => "passmidterm"
];

function isValidCredentials($username, $password, $credentials) {
    return isset($credentials[$username]) && $credentials[$username] === $password;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isValidCredentials($username, $password, $credentials)) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Not Properly Logged In";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Midterm Exam</title>
</head>
<body>
    <h1>Login Page</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Submit</button>
        <button type="button" onclick="resetForm()">Reset</button>
    </form>
    
    <?php if (isset($error)): ?>
        <p><?= $error?></p>
    <?php endif; ?>

    <script>
        function resetForm() {
            document.querySelector('input[name="username"]').value = '';
            document.querySelector('input[name="password"]').value = '';
        }
    </script>
</body>
</html>