<?php

/**
 * Adresse du root du server
 */
define("ROOT", realpath(__dir__));

/**
 * Adresse du dossier view sur le server
 */
define('VIEW_PATH', ROOT .'/app/view/');

/**
 * Adresse du dossier model sur le server
 */
define('MODEL_PATH', ROOT.'/app/model/');

/**
 * Adresse du dossier controller sur le server
 */
define('CONTROLLER_PATH', ROOT.'/app/controller/');

header('Location : https://movies-friend.herokuapp.com/app/view/accueil.php');

?>