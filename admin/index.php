<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Montserrat|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>

    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <!--dodawanie do galerii-->
            <form method="post" action="../scripts/gallery_add.php">
                <h1>Dodaj post do galerii</h1><br>
                <p>Tytuł:</p><input type="text" name="tytul">
                <p>Ścieżka:</p><input type="text" name="sciezka">
                <p>Opis:</p><textarea rows="4" cols="50" name="opis"></textarea><br />
                <button type="submit">Submit</button>
            </form>
            <!--dodawanie do galerii-->
            <a href="galeria.php">Galeria</a>
            <a href="posty.php">Lista postow</a><br>
        <?php endif ?>
    </div>

    </body>
</html>