<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Klapss</title>
</head>
<body>
    <?php require "../requires/header.php" ?>
    <main>
        <div class="imageAccueil">
            <img src="https://cache.marieclaire.fr/data/photo/w1000_ci/5g/materiel-pinceau-peinture-bleu.jpg" alt="">
        </div>
           <div class="textPre">
                <h1>Bienvenue sur Klapss: La solution innovente à vos travaux de peinture.</h1>
                <a href="#prod"><button>Découvrir</button></a>
            </div> 
            
        <section class="containerRef">
            <h1>Nous sommes visibles sur:</h1>
            <div class="refs">
                <div class="video">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/6oP0-KP_5NU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/_q4_Pczk2QQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/zBMAXiq_iuo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section >

        <div id="prod">

        </div>

        <section  class="containerProduit">
            <div class="prodImage">
                <img src="https://m.media-amazon.com/images/I/71HQqkWJF8L._AC_SX679_.jpg" alt="">
            </div>
            <div class="textProd1">
                <h1>L'outil Klapss</h1>
                <p>Il est possible de faire beaucoup de choses avec Klapss : • Réussir les bords avec le pinceau muni du Klapss • Peindre le bord d'un mur sans toucher le plafond • Peindre un mur sans toucher le chambranle des portes . • Peindre les châssis des fenêtres • Peindre les portes ou les moulures</p>
                <a href="../views/produits.php"><button>Acheter</button></a>
            </div>
        </section>
        
        <div class="avisClient">
            <h1><center>Un petit mot de nos clients</center></h1>
            <div class="comClient">
                <div class="avis">
                    <img src="https://st2.depositphotos.com/3994049/7791/v/600/depositphotos_77912838-stock-illustration-quote-marks-icon-with-shadow.jpg" alt="Image guillemet">
                    <p>"Produit très qualitatif, de belle finitions "</p>
                    <h4>Stephan</h4>
                </div>
                <div class="avis">
                <img src="https://st2.depositphotos.com/3994049/7791/v/600/depositphotos_77912838-stock-illustration-quote-marks-icon-with-shadow.jpg" alt="Image guillemet">
                    <p>Super les tutos !!!</p>
                    <h4>Paul</h4>
                </div>
                <div class="avis">
                <img src="https://st2.depositphotos.com/3994049/7791/v/600/depositphotos_77912838-stock-illustration-quote-marks-icon-with-shadow.jpg" alt="Image guillemet">
                    <p>Réchampir n'a jamais été aussi simple</p>
                    <h4>Bernard</h4>
                </div>
            </div>
        </div>
            
    </main>

    <?php require "../requires/footer.php" ?>

</body>
</html>