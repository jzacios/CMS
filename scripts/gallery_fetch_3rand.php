<?php
session_start();
require_once("db_connect.php");
$stmt = $pdo->prepare("SELECT count(id) FROM posts");
$stmt->execute();
$liczba = $stmt->fetch();
$maks = $liczba[0];
$ktore = [0,0];
$switch = true;
for($i=0;$i<=1;$i++) {
    while ($switch) {
        $holder = rand(1, $maks);
        if ($ktore[0] != $holder AND $ktore[1] != $holder) {
            $ktore[$i] = $holder;
            $switch = false;
        }
    }
    $switch = true;
}

$stmt1 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt1->execute([$ktore[0]]);
$zdjecie1 = $stmt1->fetch();

$img1 = '<img src="useless_shit/gallery/'.$zdjecie1[1].'">';
$title1 ='<h1>'.$zdjecie1[0].'</h1>';
$opis1 = '<p>'.$zdjecie1[2].'</p>';

$stmt2 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt2->execute([$ktore[1]]);
$zdjecie2 = $stmt2->fetch();

$img2 = '<img src="useless_shit/gallery/'.$zdjecie2[1].'">';
$title2 ='<h1>'.$zdjecie2[0].'</h1>';
$opis2 = '<p>'.$zdjecie2[2].'</p>';