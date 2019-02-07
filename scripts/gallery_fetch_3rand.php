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
echo $zdjecie1[0]." ";
echo $zdjecie1[1]." ";
echo $zdjecie1[2]." ";

$stmt2 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt2->execute([$ktore[1]]);
$zdjecie2 = $stmt2->fetch();
echo ("<br>");
echo $zdjecie2[0]." ";
echo $zdjecie2[1]." ";
echo $zdjecie2[2]." ";

$stmt3 = $pdo->prepare("Select title,photo,content FROM posts WHERE id = ?");
$stmt3->execute([$ktore[2]]);
$zdjecie3 = $stmt3->fetch();
echo ("<br>");
echo $zdjecie3[0]." ";
echo $zdjecie3[1]." ";
echo $zdjecie3[2];