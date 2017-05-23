<?php
    if(!empty($_COOKIE(["droit"]))){
        $droit = $_COOKIE(["droit"]);
        if ($droit==sha1("admin")){
            //si admin
            header("Location: /app/view/dashboard.php");
        }elseif ($droit==sha1("util")){
            //si utilisateur
            header("Location: /app/view/listefilmutil.php");
        }
    }else{
        header("Location: /app/view/accueil.php");
    }
?>