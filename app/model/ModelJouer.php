<?php

require_once("Model.php");

    /**
     *Selectionne tous les films d'un acteur donne
     *@param @idact id de l'acteur
     *@return l'id des films
    **/

    function selectbyacteur($idact){
        global $bd;
        try{
            $req = $bd->prepare("SELECT id_film FROM joeur WHERE id_acteur = ?");
            $req->execute(array($idact));
            return ($req);
        }
        catch(PDOException $e)
        {
            echo ($e->getMessage());
            die("<br> Erreur lors de la selection dans la table jouer");
        }
    }

?>