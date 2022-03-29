<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<?php require "./requires/header.php" ?>
    <article>
        <h1>Inscription</h1>
    </article>
    <article>
        <form method="post" action="../views/connexion.php"></form>
            <input type="text" name="login" placeholder="Login"></input>
            <input type="email" placeholder="Email"></input>
            <input type="password" placeholder="Password"></input>
            <input type="password2" placeholder="Confirmation de password"></input>
            <input type="submit" name="submit"></input>
        </form>
    </article>
</body>
</html>