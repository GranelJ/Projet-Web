<?php require_once("../model/ModelFilm.php");
      require_once("../model/ModelAjouter.php");?>

<?php
    $idutil = $_COOKIE("info");
    $film = selectbyutil($idutil);
    $idfilm=$film[id_film];
    $nomfilm=getNameFilmById($idfilm);
    header("Location: /app/view/listefilmutil.php")
?>