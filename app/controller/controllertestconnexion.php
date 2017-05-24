<?php
    if(!empty($_COOKIE["droit"])){
        $droit = $_COOKIE["droit"];
        if ($droit==sha1("admin")){
            //si admin
            header("Location: /admin/dashboard");
        }elseif ($droit==sha1("util")){
            //si utilisateur
            header("Location: /user/listefilm");
        }
    }else{
        header("Location: /accueil");
    }
?>