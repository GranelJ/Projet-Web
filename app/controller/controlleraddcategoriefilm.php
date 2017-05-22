<?php
    require_once('../model/ModelCategorieFilm.php');

    if(isset($_POST['namecat'])){
        $cat = htmlspecialchars($_POST['namecat']); 
        createCategorieFilm($cat);
    	echo "Catégorie ajouté, vous allez être redirigé.";
		header('refresh:3;url=/app/view/dashboardadmin.php');
    }
?>