<?php

require_once("Model.php");

    /**
     *Selectionne tous les film qu'un utilisateur a rajoute
     *@param @idutil id de l'utilisateur
     *@return la liste des films, note, et si l'utilisateur a vu le film
    **/

    function selectbyutil($idutil){
        global $bd;
        try{
            $req = $bd->prepare("SELECT id_film,note_film,vu FROM realiser WHERE id_utilisateur = ?");
            $req->execute(array($idutil));
            return ($req);
        }
        catch(PDOException $e)
        {
            echo ($e->getMessage());
            die("<br> Erreur lors de la selection dans la table ajouter");
        }
    }

?>