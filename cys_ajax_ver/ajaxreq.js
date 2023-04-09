$(document).ready(function() {
    // Ecouteur d'événements pour le bouton "Commencer"
    $(".btn-commence").click(function() {
      // Exécution des trois requêtes AJAX en parallèle
      $.when(
        $.ajax({
          url: "conff.php",
          type: "POST",
          data: { action: "getPerso" }
        }),
        $.ajax({
          url: "conff.php",
          type: "POST",
          data: { action: "getAction" }
        }),
        $.ajax({
          url: "conff.php",
          type: "POST",
          data: { action: "getLieu" }
        })
      ).done(function(resultatPerso, resultatAction, resultatLieu) {
        // Mise à jour des boutons avec les résultats des requêtes
        $(".btn-perso").val(resultatPerso[0].personnage); //.'nom de la table'
        $(".btn-action").val(resultatAction[0].action);
        $(".btn-lieu").val(resultatLieu[0].lieu);
      });
    });
  });
  