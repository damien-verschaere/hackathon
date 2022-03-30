<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Klapss</title>
</head>

<body class="bodyP1">
    <header>
        <?php require "../requires/header.php" ?>
    </header>
    <main class="P1">
        <div class="pack2 ms-5">
            <img src="../assets/img/pack2.png" alt="Klapss champiface ">
            <div class="buttonP1 mx-3">
                <h2 class="mx-5 mb-3 text-center">KLAPSS Applicateur a réchampir +<br> pinceau + 02 velours adhésifs de protection</h2>
                <p>
                    2 adhésifs de protection pour remplacement après usure, 01 pour protection des murs, 01 pour porte-vitrée
                    Prise en main facile pour les peintres professionnels ou non.
                    Obtenez facilement une finition soignée, peignez sans déborder Réalisez rapidement des travaux d’angle, avec une grande précision.
                    Une alternative aux adhésifs de protection.
                    Fini les scotchs de masquage, C’est l’outil idéal pour peindre les séparations entre 2 couleurs, permet des lignes précises et une bonne application de peinture.
                </p>
                <button id="myBtn" >ajoutez au panier</button>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>votre produit a bien été ajouté</p>
                    </div>

                </div>
                <script type="text/javascript">
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on the button, open the modal
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>
                  <button ><a href="../views/panier.php">Achetez maintenant</a></button>
            </div>
        </div>
        <h3>UNE ALTERNATIVE AUX ADHESIF DE PROTECTION</h3>
    </main>
    <?php require "../requires/footer.php" ?>
</body>
