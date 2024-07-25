<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <h1>Login Form</h1>
    <form method="POST" action="login_action.php">
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <button type="submit" value="Login">Login</button><br><br>
        Don't have an account yet? <a href="signup.php">Sign up</a>
    </form>
</body>
</html>