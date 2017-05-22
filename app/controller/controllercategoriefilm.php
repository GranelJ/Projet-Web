<?php
    require_once("/app/model/ModelCategorieFilm.php");
    if (isset($_POST['namecat'])){
        $cat = htmlspecialchars($_POST['namecat']); 
        createCategorieFilm($cat);
    	echo "Catégorie ajouté, vous allez être redirigé.";
		header('refresh:5;url=/app/view/dashboardadmin.php');
    }
?>