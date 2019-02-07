<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="../scripts/login_check.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Montserrat|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="reg-title">Login</h1>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <input type="text" name="username"  placeholder="Enter your username">
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="login_user">Login</button>
                </div>
                <p class="member-info">
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>
    </body>
</html>