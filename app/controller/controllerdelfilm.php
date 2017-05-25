<?php
	require_once("../model/ModelFilm.php");
    
    if(!empty($_POST['namefilm']) AND !empty($_POST['annee'])){
        $name=$_POST['namefilm'];
        $annee=$_POST['annee'];
        $id=getIdFilm($name,$annee);
        deleteByIdFilm($id);
        echo "Le film a bien été supprimer";
        header("refresh:2;url=/user/listefilm");
    }
?>