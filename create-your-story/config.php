<?php
function SGBDConnect() {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=create_sto', 'xxxx', 'xxxx');
        $connexion->query('SET NAMES UTF8');
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $connexion;
}

function getPerso(){
    $sql = SGBDConnect()->prepare('SELECT * FROM personnage ORDER BY RAND() LIMIT 1');
    $sql->execute();
    $resultatPerso = $sql->fetch(PDO::FETCH_ASSOC);
    return $resultatPerso;
}

function getAction(){
    $sql = SGBDConnect()->prepare('SELECT * FROM action ORDER BY RAND() LIMIT 1');
    $sql->execute();
    $resultatAction = $sql->fetch(PDO::FETCH_ASSOC);
    return $resultatAction;
}

function getLieu(){
    $sql = SGBDConnect()->prepare('SELECT * FROM lieu ORDER BY RAND() LIMIT 1');
    $sql->execute();
    $resultatLieu = $sql->fetch(PDO::FETCH_ASSOC);
    return $resultatLieu;
}


?>
