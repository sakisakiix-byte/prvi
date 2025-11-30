<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="signup.php" method="post">
        <h1>Sign Up</h1>
        <label for="new_username">Username:</label>
            <input type="text" id="new_username" name="new_username" required><br><br>
        <label for="new_password">Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Sign Up">
        <a href="index.php">Already have an account? Login here!</a>
</body>
</html>