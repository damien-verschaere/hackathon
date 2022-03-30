<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body class=produits>
    <header>
        <?php require "../requires/header.php"; ?>
    </header>
    <main class=mainProduit>
        <section class="produit">
            <div class="card " style="width: 18rem;">
                <img src="../assets/img/champiface1.jpg" class="card-img-top" alt="champiface Klapss peinture">
                <div class="card-body">
                    <h5 class="card-title">KLAPSS APPLICATEUR DE PEINTURE AVEC PINCEAU</h5>
                    <a href="pack1.php" class="btn btn-primary mt-5 ms-5 me-5">details produit</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../assets/img/champiface1.jpg" class="card-img-top" alt="champiface Klapss peinture">
                <div class="card-body">
                    <h5 class="card-title">KLAPSS Applicateur a réchampir + pinceau + 02 velours adhésifs de protection</h5>
                    <a href="pack2.php" class="btn btn-primary mt-3 ms-5 me-5">details produit</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../assets/img/pack3.png" class="card-img-top" alt="champiface Klapss peinture">
                <div class="card-body">
                    <h5 class="card-title">Applicateur de peinture avec pinceau + pinceau de rechange pré percé</h5>
                    <a href="pack3.php" class="btn btn-primary mt-3 ms-5 me-5  ">details produit</a>
                </div>
            </div>
        </section>
        
        <h3> REALISEZ RAPIDEMENT DES TRAVAUX D'ANGLE,
            AVEC UNE GRANDE PRECISION.
        </h3>
        
    </main>
    <?php require "../requires/footer.php"; ?>
</body>

</html>