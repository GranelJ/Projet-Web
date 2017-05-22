<?php

require_once("Model.php");

    /**
   	 *Retourne les categories de films
   	**/
   	function selectAll(){
		global $bd;
   		try{
   			$req = $bd->prepare('SELECT lib_cat FROM categorie_film');
   			$req->execute();
   			return $req;
   		}
   		catch (PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de tous les objet de la table categorie_film");
   		}
   	}

   	/**
   	 *Creer un realisateur
   	 *@param $lib libelle de la categorie
   	**/
   	function createCategorieFilm($lib){
		global $bd;
   		try{
   			$req = $bd->prepare('INSERT INTO categorie_film (lib_cat) VALUES (?)');
   			$req->execute(array($lib));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l\'ajout d\'une catégorie à la table categorie_film");
   		}
   	}

   	/**
   	 *Supprimer une categorie
   	 *@param $id identifiant de la categorie
   	**/
   	function deleteById($id){
   		global $bd;
		try{
   			$req = $bd->prepare('DELETE FROM categorie_film WHERE id_catfilm=?');
   			$req->execute(array($id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression de la catégorie dans la table categorie_film");
   		}
   	}
?>