<?php

require_once("Model.php");

    /**
   	 *Retourne les acteurs
   	**/
   	function selectAll(){
		global $bd;
   		try{
   			$req = $bd->prepare('SELECT nom_acteur, prenom_acteur FROM acteur');
   			$req->execute();
   			return $req;
   		}
   		catch (PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de tous les objet de la table acteur");
   		}
   	}

   	/**
   	 *Creer un acteur
   	 *@param $nom nom de l'acteur
	 *@param $prenom prenom de l'acteur
   	**/
   	function createActeur($nom,$prenom){
   		global $bd;
		try{
   			$req = $bd->prepare('INSERT INTO acteur (nom_acteur, prenom_acteur) VALUES (?,?)');
   			$req->execute(array($nom,$prenom));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'un acteur à la table acteur");
   		}
   	}

   	/**
   	 *Supprimer un acteur
   	 *@param $id identifiant de l'acteur
   	**/
   	function deleteById($id){
		global $bd;
   		try{
   			$req = $bd->prepare('DELETE FROM acteur WHERE id_acteur = ?');
   			$req->execute(array($id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression de l'acteur dans la table acteur");
   		}
   	}
	/**
	 *Get id d'un acteur
	 *@param $nomact nom de l'acteur
	 *@param $prenomact prenom de l'acteur
	 *@return id de l'acteur
	**/
	function getIdAct($nomact, $prenomact){
		global $bd;
		try{
			$req = $bd->prepare('SELECT id_acteur FROM acteur WHERE nom_acteur = ? AND prenom_acteur = ?');
			$req->execute(array($nomact,$prenomact));
			$res=$req->fetch();
			return($res[0]);
		}
		catch(PDOException $e){
			echo($e->getMessage());
			die("<br> Erreur lors de la recuperation de l'id dans la table acteur");
		}
	}

?>