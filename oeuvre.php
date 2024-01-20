<?php
include('header.php');
include('oeuvres.php');
?>
    <main>
        <?php

        // S'il y a bien un id dans l'url et s'il n'est pas vide
        if (!empty($_GET['id'])) {

            // Variable contenant la clé de l'oeuvre dans le tableau
            $index = "oeuvre_" . $_GET['id'];

            // Tester si la clé de l'oeuvre existe dans le tableau
            if (array_key_exists($index, $oeuvres)) {
                // Si elle existe affichage des informations du "sous tableau" oeuvre
                $oeuvre = $oeuvres[$index];
                ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['title']; ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['title']; ?></h1>
                        <p class="description"><?php echo $oeuvre['author']; ?></p>
                        <p class="description-complete">
                            <?php echo $oeuvre['description']; ?>
                        </p>
                    </div>
                </article>
                <?php

            } else {
                // Si l'oeuvre n'existe pas
                echo 'ERREUR 404 : La page que vous recherchez n\'existe pas';
            }
        } else {
            // Si pas d'id ou id vide
            echo 'ERREUR : l\'URL est incorrecte. L\'identifiant de l\'oeuvre est nécessaire pour afficher la page.';
        }
        ?>
    </main>

    <!-- include du footer -->
<?php include('footer.php'); ?>
