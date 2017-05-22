<?php
    if(isset($_COOKIE(['droit'])) AND isset($_COOKIE(['info']))){
        $droit = $_COOKIE(["droit"]);
        if ($droit===sha1("admin")){
            header("Location: /app/view/dashboard.php");
        }elseif ($droit===sha1("util")){
            header("Location: /app/view/listefilmutil.php");
        }
    }else{
        header("Location: /app/view/accueil.php");
    }
?>