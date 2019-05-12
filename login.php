<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Sign-in form act5</title>
</head>
<body>
    <div class="loginbox">
        <img src="avatar.png" alt="avatar" class="avatar">
        <h1>Login Here</h1>
        <form action="submit.php" method="POST">
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
    </div>
</body>
</html>