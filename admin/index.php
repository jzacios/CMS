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
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <a href="posty.php">Lista postow</a><br>
<!--    dodawanie do galerii-->
        <form method="post" action="../scripts/gallery_add.php">
            Dodaj post do galerii <br>
            tytul <input type="text" name="tytul">
            sciezka <input type="text" name="sciezka">
            opis <textarea rows="4" cols="50" name="opis"></textarea>
            <input type="submit">
        </form>
<!--    dodawanie do galerii-->
        <a href="galeria.php">Galeria</a>
    <?php endif ?>
</div>

</body>
</html>