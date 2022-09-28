<?php
$pdo = new PDO('mysql:host=localhost;dbname=gatas', "larissa", "");
$q = "select * from users where id = :id";
$query = $pdo->prepare($q);
$query->bindParam(":id", $_GET['idGata'], PDO::PARAM_INT);
$query->execute();
 
$gata = $query->fetch(PDO::FETCH_ASSOC);
var_dump($gata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="update.php" method="post">
        <input type="hidden" name="idGata" value="<?=$gata['id']?>">
        <div>
            <label for="name">Nome da gata:</label> <br>
            <input type="text" id="name" name="name" value="<?= $gata['name']?>"> 
        </div>
        <div>
            <label for="birthdate">Data de nascimento da gata:</label> <br>
            <input type="date" id="birthdate" name="birthdate" value="<?= $gata['birthdate']?>">
        </div>
        <div>
            <label for="about">O que você estuda, gata?</label> <br>
            <textarea name="about" id="about" cols="30" rows="10"><?= $gata['about'] ?></textarea>
        </div>
        <div>
            <label for="twitterUrl">Qual seu twitter, gata?</label> <br>
            <input type="text" id="twitterUrl" name="twitterUrl" value="<?= $gata['twitter_url']?>">
        </div>
        <button type="submit">Virar gata</button>
    </form>
</body>
</html>