<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="index.php" method="get">
        <h1>Login</h1>
        <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login"><br>
        <a href="singupup.php">Don't have an account? Sing up now!</a>
    </form>
</body>
</html>
<?php
    $username = trim($_GET['username']);
    $password = trim($_GET['password']);
    
    switch ($username) {
        case "sofija" && $password == "sofija123":
            echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
            break;
        case "janja" && $$password == "janja123":
            echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
            break;
    }
?>