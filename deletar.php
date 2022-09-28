<?php

if(!isset($_GET['idGata'])) {
    die("oi me dá um emprego duvido");
}

$pdo = new PDO('mysql:host=localhost;dbname=gatas', "larissa", "");
$q = "delete from users where id = :id";
$query = $pdo->prepare($q);
$query->bindParam(':id', $_GET['idGata'], PDO::PARAM_INT);
$query->execute();


header("Location: /listar.php");