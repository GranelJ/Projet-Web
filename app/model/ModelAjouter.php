<?php

require_once("Model.php");

    /**
     *Selectionne tous les film qu'un utilisateur a ajoute
     *@param $idutil id de l'utilisateur
     *@return la liste des films, note, et si l'utilisateur a vu le film
    **/

    function selectbyutil($idutil){
        global $bd;
        try{
            $req = $bd->prepare("SELECT id_film,note_film,vu FROM ajouter WHERE id_utilisateur = ?");
            $req->execute(array($idutil));
            return ($req);
        }
        catch(PDOException $e)
        {
            echo ($e->getMessage());
            die("<br> Erreur lors de la selection dans la table ajouter");
        }
    }

    /**
     *Ajoute un film
     *@param $note note donne
     *@param $vu booleen vu
     *@param $idutil id de l'utilisateur
     *@param $idfilm id du film
     **/
     function createfilmforajouter($note,$vu,$idutil,$idfilm){
         global $bd;
         try{
             $req=$bd->prepare("INSERT INTO ajouter VALUES (?,?,?,?)");
             $req->execute(array($note,$vu,$idfilm,$idutil));
         }
         catch(PDOException $e)
         {
             echo ($e->getMessage());
             die("<br> Erreur lors de l'ajout du film dans la table ajouter");
         }
     }
?>