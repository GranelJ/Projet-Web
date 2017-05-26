<?php 
    require_once("../model/ModelFilm.php");
    require_once("../model/ModelAjouter.php");

    $idutil = $_COOKIE["info"];
    $film = selectbyutil($idutil);
?>