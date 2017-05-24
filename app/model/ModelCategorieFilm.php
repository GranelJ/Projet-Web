<?php

require_once("Model.php");

    /**
   	 *Retourne les categories de films
   	**/
   	function selectAllCat(){
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
   	 *Creer une categorie de film
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
   	function deleteByIdCat($id){
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

   	/**
   	 *Recupere id d'une categorie
   	 *@param $lib libelle de la categorie
   	**/
	function getIdCat($lib){
		global $bd;
		try{
			$req=$bd->prepare('SELECT id_catfilm WHERE id_cat = ?');
			$req->execute(array($lib));
			$res=$req->fetch();
			return($res);
		}
		catch(PDOException $e)
		{
			echo($e->getMessage());
			die("<br> Erreur lors de la recupération de l'id dans la table categorie_film");
		}
	}
?>