<?php
require_once './config.php';

$perso = getPerso();
$action = getAction();
$lieu = getLieu();

?>

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

<?php if (isset($_POST['generer'])) { ?>

<div class="type-box avant" id="resultat">

<?php } else { ?>

<div class="type-box apres" id="resultat">

<?php } ?>

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

<?php if (isset($_POST['generer'])) { ?>

</div>

<?php } ?>

<button type="button" class="btn-commence fadeToRight" id="btn-rep" value="Recommencer"></button>