<?php

$pdo = new PDO('mysql:host=localhost;dbname=gatas', "larissa", "");
$q = "update users set name = :name, birthdate = :birthdate, about = :about, twitter_url = :twitter_url where id = :idGata";
$query = $pdo->prepare($q);
$query->bindParam(":idGata", $_POST['idGata'], PDO::PARAM_INT);
$query->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$query->bindParam(":birthdate", $_POST['birthdate'], PDO::PARAM_STR);
$query->bindParam(":about", $_POST['about'], PDO::PARAM_STR);
$query->bindParam(":twitter_url", $_POST['twitterUrl'], PDO::PARAM_STR);
$query->execute();

header("Location: /listar.php");