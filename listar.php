<?php
$pdo = new PDO('mysql:host=localhost;dbname=gatas', "larissa", "");
$q = "select * from users";
$query = $pdo->prepare($q);
$query->execute();
$gatas = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <?php
    include("template/navbar.php");
    ?>
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Data de nascimento</td>
                <td>Sobre</td>
                <td>Twitter</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($gatas as $gata) {
            ?>
            <tr>
                <td><?= $gata['name'] ?></td>
                <td><?= $gata['birthdate'] ?></td>
                <td><?= $gata['about'] ?></td>
                <td>
                    <a target="_blank" href="https://twitter.com/<?= $gata['twitter_url'] ?>"><?= $gata['twitter_url'] ?></a>
                </td>
                <td>

                    <a href="editar.php?idGata=<?= $gata['id'] ?>">Atualizar gata</a>
                    <a href="deletar.php?idGata=<?= $gata['id'] ?>">Deixar de ser uma gata</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>