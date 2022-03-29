<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <title>Connexion</title>
</head>
<body>
    <header>
        <?php require "../requires/header.php" ?>
    </header>
    <main>
    <article>
        <h1>Connexion</h1>
    </article>
    <article>
        <form method="post">
            <input type="text" name="login" placeholder="Login"></input>
            <input type="password" placeholder="Password"></input>
            <input type="submit" name="submit" id="submit" value="submit"></input>
            <?php 
            if(isset($_POST['submit'])){
            header("location:../views/profils.php"); 
            }
            ?>
        </form>
    </article>
    </main>
</body>
</html>