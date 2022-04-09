<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Regjistrohu</title>
    </head>
    <body>
    <form method="post" action="signup.php">
        <?php include('errors.php');?>
        <div class="sign-up-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="sign-up-form">
                        <div class="sign-up-center">
                            <h1>Welcome at "Gjuhet" platform</h1>
                            <h1>Sign up as a teacher</h1>
                            <br><br>
                            <div class="row row-inner">
                                <div class="col-md-6">
                                    <input type="text" name="username" placeholder="Name" value="<?php echo $username;?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" value="<?php echo $email;?>">
                                </div>
                            </div>
                            <br>
                            <div class="row row-inner">
                                <div class="col-md-6">
                                    <input type="password" name="password_1" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <input type="password"  name="password_2" placeholder="Confirm Password">
                                </div>
                            </div>
                            <br><br>
                            <button type="submit" class="btn" name="reg_user">Sign up</button>
                            <p>Do you have account? <a href="signin.php">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>