<?php
if (!isset($_SESSION)){
    header("Location: welcome.php");
};  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <h1>jkdsghuasgdf</h1>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>