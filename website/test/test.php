<?php
    $username = trim($_POST['new_username']);
    $password = trim($_POST['new_password']);
    
    // Here you would typically save the new user to a database
    // For demonstration, we'll just display a success message
    
    echo "Sign up successful! Welcome, " . htmlspecialchars($username) . ". You can now <a href='index.php'>login</a>.";
?>