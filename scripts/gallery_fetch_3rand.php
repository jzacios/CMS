<?php
session_start();
require_once("db_connect.php");
$stmt = $pdo->prepare("SELECT count(id) FROM posts");
$stmt->execute();
$liczba = $stmt->fetch();
$maks = $liczba[0];
$ktore = [0,0,0];
$switch = true;
for($i=0;$i<=2;$i++) {
    while ($switch) {
        $holder = rand(1, $maks);
        if ($ktore[0] != $holder AND $ktore[1] != $holder AND $ktore[2] != $holder) {
            $ktore[$i] = $holder;
            $switch = false;
        }
    }
    $switch = true;
}

$stmt1 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt1->execute([$ktore[0]]);
$zdjecie1 = $stmt1->fetch();

$stmt2 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt2->execute([$ktore[1]]);
$zdjecie2 = $stmt2->fetch();

$stmt3 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt3->execute([$ktore[2]]);
$zdjecie3 = $stmt3->fetch();