<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
</head>
<body>
    <h1>Signup Form</h1>
    <form method="POST" action="signup_action.php">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <button type="submit" value="Signup">Sign up</button><br>
        Already have an account? <a href="login.php">Log in</a><br>
    </form>
</body>
</html>