<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Sign in</title>
    </head>
    <body>
    <form method="post" action="signin.php">
        <?php include('errors.php'); ?>
        <div class="sign-in-wrapper">
            <div class="sign-in-content">
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Fjalekalimi">
                <button type="submit" class="btn" name="login_user">Sign in</button>
                <p>Nuk ke account? <a href="signup.php">Regjistrohu</a></p>
            </div>
        </div>
    </form>
    </body>
</html>