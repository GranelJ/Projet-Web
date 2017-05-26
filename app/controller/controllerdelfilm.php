<?php
	require_once("../model/ModelFilm.php");
    
    if(!empty($_POST['namefilm']) AND !empty($_POST['annee'])){
        $name=htmlspecialchars($_POST['namefilm']);
        $annee=htmlspecialchars($_POST['annee']);
        $id=getIdFilm($name,$annee);
        deleteByIdFilm($id);
        echo "Le film a bien été supprimé";
        header("refresh:2;url=/user/listefilm");
    }
?>