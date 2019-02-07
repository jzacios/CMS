<?php
require_once("db_connect.php");
$tytul = $_POST['tytul'];
$sciezka = $_POST['sciezka'];
$opis  = $_POST['opis'];
$result = $pdo->prepare('INSERT INTO posts(
                        title,
                        photo,
                        content
                        )
 
                        VALUES(
                        :title,
                        :photo,
                        :content
                        )');
$result->bindValue(':title',$tytul,PDO::PARAM_STR);
$result->bindValue(':photo',$sciezka,PDO::PARAM_STR);
$result->bindValue(':content',$opis,PDO::PARAM_STR);
$result->execute();
print_r($pdo->errorInfo());