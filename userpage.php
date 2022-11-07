<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waccord</title>
</head>
<body>
    <form action="signup.php" method="post" enctype="multipart/form-data">
        email: <input type="text" name="email" value=""><br>        
        username: <input type="text" name="username" value=""><br>
        password: <input type="password" name="password" value=""><br>
        profile pic: <input type='file' name='pfp'><br>
        <input type="submit" name="signup" value="sign up"><br>
    </form>

    <form action="login.php" method="post">
        username: <input type="text" name="username" value=""><br>
        password: <input type="password" name="password" value=""><br>
        <input type="submit" value="Login"><br>
    </form>

</body>
</html>