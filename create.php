<?php


$pdo = new PDO('mysql:host=localhost;dbname=gatas', "larissa", "");
$q = "insert into users values (null, :name, :birthdate, :about, :twitter_url)";
$query = $pdo->prepare($q);
$query->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$query->bindParam(":birthdate", $_POST['birthdate'], PDO::PARAM_STR);
$query->bindParam(":about", $_POST['about'], PDO::PARAM_STR);
$query->bindParam(":twitter_url", $_POST['twitterUrl'], PDO::PARAM_STR);
$query->execute();

header("Location: /listar.php");