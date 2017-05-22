<?php
    if(!empty($_COOKIE(["droit"]))){
        $droit = $_COOKIE(["droit"]);
        if ($droit==sha1("admin")){
            header("Location: /app/view/dashboard.php");
        }elseif ($droit==sha1("util")){
            header("Location: /app/view/listefilmutil.php");
        }
    }else{
        echo"fuck";
        //header("Location: /app/view/accueil.php");
    }
?>