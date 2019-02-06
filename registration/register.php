<?php include('server.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration system PHP and MySQL</title>

        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Montserrat|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1 class="reg-title">Register</h1>
        <form method="post" action="register.php">
            <!-- <?php include('errors.php'); ?> -->
            <div class="input-group">
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username">
            </div>
            <div class="input-group">
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your e-mail">
            </div>
            <div class="input-group">
                <input type="password" name="password_1" placeholder="Enter password">
            </div>
            <div class="input-group">
                <input type="password" name="password_2" placeholder="Confirm password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p class="member-info">
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>

    </body>
</html>