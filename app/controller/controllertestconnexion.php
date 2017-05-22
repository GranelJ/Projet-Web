<?php
    $info = $_COOKIE(["info"]);
    $droit = $_COOKIE(["droit"]);
    if(($droit == null) AND ($info == null)){
        header("Location: /app/view/accueil.php");
    }elseif($droit==sha1("admin")){
        header("Location: /app/view/dashboardadmin.php");
    }elseif($droit==sha1("util")){
        header("Location: /app/view/listefilmutil.php");
    }
?>