<?php
$mysql_host = 'localhost';
$port = '3306';
$username = 'root';
$password = '';
$database = 'blog';

try{
    $pdo = new PDO('mysql:host='.$mysql_host.';dbname='.$database.';port='.$port, $username, $password );
//    echo 'Połączenie nawiązane!';
}catch(PDOException $e){
    echo 'Połączenie nie mogło zostać utworzone.<br />';
}
?>