<?php
    require_once('../model/ModelCategorieFilm.php');
    $cat=selectAllCat();
    header("Location: /app/view/ajoutfilm.php");
?>