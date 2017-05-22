<?php

require_once("Model.php");

    /**
   	 *Retourne les realisateurs
   	**/
	function selectAll(){
		global $bd;
   		try{
   			$req = $bd->prepare('SELECT nom_realisateur,prenom_realisateur FROM realisateur');
   			$req->execute();
   			return $req;
   		}
   		catch (PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de tous les objet de la table realisateur");
   		}
   	}

   	/**
   	 *Creer un realisateur
   	 *@param $nom nom du realisateur
	 *@param $prenom prenom du realisateur
   	**/
	function createRealisateur($nom, $prenom){
		global $bd;
   		try{
   			$req = $bd->prepare('INSERT INTO realisateur (nom_realisateur, prenom_realisateur)
   			 VALUES(?, ?)');
   			$req->execute(array($nom,$prenom));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'un realisateur à la table realisateur");
   		}
   	}

   	/**
   	 *Supprimer un realisateur
   	 *@param $id identifiant du realisateur
   	**/
	function deleteById($id){
		global $bd;
   		try{
   			$req = $bd->prepare('DELETE FROM realisateur WHERE id_realisateur= ?');
   			$req->execute(array($id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression du realisateur dans la table realisateur");
   		}
   	}

	/**
	 *Get id d'un realisateur
	 *@param $nomreal nom du realisateur
	 *@param $prenomreal prenom du realisateur
	 *@return $req id du realisateur
	**/
	function getIdReal($nomreal, $prenomreal){
		global $bd;
		try{
			$req = $bd->prepare('SELECT id_realisateur FROM realisateur WHERE nom_realisateur = ? AND prenom_realisateur = ?');
			$req->execute(array($nomreal,$prenomreal));
			$res=$req->fetch();
			return($res[0]);
		}
		catch(PDOException $e){
			echo($e->getMessage());
			die("<br> Erreur lors de la recuperation de l'id dans la table realisateur");
		}
	}

?>