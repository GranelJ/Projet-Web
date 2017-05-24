<?php
    setcookie("info", $token,time(),"/");//perime les cookies
	setcookie("droit", $droit,time(),"/");
    unset($_COOKIE['droit']);//met les valeurs à null
    unset($_COOKIE['info']);
    echo "Vous avez été déconnecté.";
    header('refresh:3;url=/accueil');//redirige apres 3s
?>