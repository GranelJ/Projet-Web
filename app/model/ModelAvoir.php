<?php

require_once("Model.php");

    /**
     *Selectionne tous les categories d'un film
     *@param @idfilm id du film
     *@return la liste des id des categories
    **/

    function selectCatbyfilm($idfilm){
        global $bd;
        try{
            $req = $bd->prepare("SELECT id_cat FROM avoir WHERE id_film = ?");
            $req->execute(array($idfilm));
            return ($req);
        }
        catch(PDOException $e)
        {
            echo ($e->getMessage());
            die("<br> Erreur lors de la selection dans la table avoir");
        }
    }

?>