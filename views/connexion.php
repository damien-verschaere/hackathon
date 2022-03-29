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
        <nav class="containerNav">
                <div class="logo">
                    <a href="index.php"><img src="../assets/img/logo.png" alt=""></a>
                </div>
                <div class="navbar">
                    <ul>
                        <a href=""><li>Produits</li></a>
                        <a href=""><li>Tuto</li></a>
                        <a href=""><li>Qui sommes-nous ?</li></a>
                    </ul>
                </div>
                <div class="picto">
                    <ul class="pictos">
                        <li><a href="Payment.php"><img src="../assets/img/panier.jpg" alt="panier"></a></li>
                    </ul>
                </div>
            </nav>
    </header>
    <article>
        <h1>Connexion</h1>
    </article>
    <article>
        <form method="post"></form>
            <input type="text" name="login" placeholder="Login"></input>
            <input type="password" placeholder="Password"></input>
            <input type="submit" name="connect"></input>
            <?php 
            if(isset($_POST['connect'])){
            header("location:../profils.php"); 
            }
            ?>
        </form>
    </article>
</body>
</html>