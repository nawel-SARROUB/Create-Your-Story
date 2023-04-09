<?php
require_once './config.php';
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deco.css">
    <script src="deco.js" async></script>
    <title>Create your story ! - Générateur d'idées</title>
</head>

<body>
    <div class="container fadeInDown">
        <div class="header-titre">
            <h1 class="titre-enonce">Create your story !</h1>
            <P class="titre-explique">
                Manque d'inspiration pour vos projets artistiques ? Générez aléatoirement des idées et le tour est joué...
            </P>
        </div>


        <div class="style-form ">
            <form action="index.php" method="post">
                <input type="submit" class="btn-commence fadeToRight" name="generer" value="Lancer l'histoire &#129094;">
            </form>
        </div>

        <?php
        if (isset($_POST['generer'])) {

            $perso = getPerso();
            $action = getAction();
            $lieu = getLieu(); 
            ?>

            <div class="type-box apres">

                <div class="grp-result">
                    <div class="box1">
                        <p class="intitule-label"><?= $perso['lib_personnage'] ?></p>
                    </div>
                </div>

                <div class="grp-result">
                    <div class="box2">
                        <p class="intitule-label"><?= $action['lib_action'] ?></p>
                    </div>
                </div>

                <div class="grp-result">
                    <div class="box3">
                        <p class="intitule-label"><?= $lieu['lib_lieu'] ?></p>
                    </div>
                </div>

            </div>

        <?php } else { ?>

            <div class="type-box avant">

                <div class="grp-result">
                    <div class="box1">
                        <p class="intitule-label">un personnage</p>
                    </div>
                </div>

                <div class="grp-result">
                    <div class="box2">
                        <p class="intitule-label">une action</p>
                    </div>
                </div>

                <div class="grp-result">
                    <div class="box3">
                        <p class="intitule-label">un lieu</p>
                    </div>
                </div>

            </div>

        <?php } ?>
        
    </div>
    </div>
</body>

</html>