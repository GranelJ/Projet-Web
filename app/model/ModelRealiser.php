<?php

require_once("Model.php");

    /**
     *Selectionne tous les realisateur d'un film donné
     *@param @idfilm id du film
     *@return l'id des realisateurs du film
    **/

    function selectbyfilm($idfilm){
        global $bd;
        try{
            $req = $bd->prepare("SELECT id_realisateur FROM realiser WHERE id_film = ?");
            $req->execute(array($idfilm));
            return ($req);
        }
        catch(PDOException $e)
        {
            echo ($e->getMessage());
            die("<br> Erreur lors de la selection dans la table realiser");
        }
    }

?>