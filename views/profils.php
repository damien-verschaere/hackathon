<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/profils.css">
    <title>Profils</title>
</head>
<body>
    <header>
        <?php require "../requires/header.php" ?>
    </header>
    <main>
        <article id="artTitle">
            <h1>Bienvenue Jean-Michal</h1>
        </article>
        <article id="artForm">
            <h2 id="title">Modification de profils</h2>
            <form method="post" id="formModif">
                <input type="text" name="login" placeholder="Jean-Michal"></input>
                <input type="email" placeholder="jean-michal@jean.com"></input>
                <input type="password" placeholder="Password"></input>
                <input type="password2" placeholder="Confirmation de password"></input>
                <input type="submit" name="submit"></input>
            </form>
        </article>
    </main>
</body>
</html>