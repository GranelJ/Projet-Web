<?php

require_once("Model.php");

/**
 *Class ModelUtilisateur
*/

class ModelUtilisateur extends Model{

    /**
     * @var nom de la clé primaire de la table
     */
    protected $pk_key = "id_utilisateur";

    /**
     * @var nom de la table
     */
    protected $table = "utilisateur";
}

?>