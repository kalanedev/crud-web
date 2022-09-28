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
    <form action="create.php" method="post">
        <div>
            <label for="name">Nome da gata:</label> <br>
            <input type="text" id="name" name="name"> 
        </div>
        <div>
            <label for="birthdate">Data de nascimento da gata:</label> <br>
            <input type="date" id="birthdate" name="birthdate">
        </div>
        <div>
            <label for="about">O que você estuda, gata?</label> <br>
            <textarea name="about" id="about" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="twitterUrl">Qual seu twitter, gata?</label> <br>
            <input type="text" id="twitterUrl" name="twitterUrl">
        </div>
        <button type="submit">Virar gata</button>
    </form>
</body>
</html>