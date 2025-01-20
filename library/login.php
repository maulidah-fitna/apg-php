<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <form action="checklogin.php" method="post">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
        </section>
     </div>
</body>
</html>