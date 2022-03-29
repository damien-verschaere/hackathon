<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profils</title>
</head>
<body>
<?php require "./requires/header.php" ?>
    <article>
        <h1>Bienvenue Jean-Michal</h1>
    </article>
    <article>
        <h2>Modification de profils</h2>
        <form method="post">
            <input type="text" name="login" placeholder="Login"></input>
            <input type="email" placeholder="Email"></input>
            <input type="password" placeholder="Password"></input>
            <input type="password2" placeholder="Confirmation de password"></input>
        </form>
    </article>
</body>
</html>