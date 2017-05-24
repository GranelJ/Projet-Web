<?php
    require_once('../model/ModelCategorieFilm.php');

    if(!empty($_POST['namecat'])){
        //si champ rempli
        $cat = htmlspecialchars($_POST['namecat']); 
        createCategorieFilm($cat);
    	echo "Catégorie ajouté, vous allez être redirigé.";
		header('refresh:3;url=/admin/dashboard');
    }else{
        echo "Le champs n'est pas rempli.";
        header("Location: /admin/ajoutcategorie");
    }
?>