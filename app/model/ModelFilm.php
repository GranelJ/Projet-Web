<?php

require_once("Model.php");

	/**
	 *Retourne tous les films
	**/
	function selectAllFilm(){
		global $bd;
		try{
		 	$req = $bd->prepare('SELECT nom_film,annee_film FROM film');
   			$req->execute();
  			return $req;
		}
		catch (PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de tous les objet de la table film");
   		}
	}

	/**
	 *Creer un film
	 *@param $nomfilm nom du film
	 *@param $anneefilm annee du film
	 *@param $catfilm categorie du film
	**/
	function createFilm($nomfilm, $anneefilm, $catfilm, $realfilm, $acteurfilm){
		global $bd;
		try{
			$req = $bd->prepare('INSERT INTO film (nom_film, annee_film, cat_film, realisateur_film, acteur_film) VALUES (?, ?, ?, ?, ?)');
			$req->execute(array($nomfilm,$anneefilm,$catfilm,$realfilm,$acteurfilm));
		}
		catch(PDOException $e)
		{
			echo($e->getMessage());
			die("<br> Erreur lors de l'ajout du film à la table film");
		}
	}

	/**
	 *Supprime un film
	 *@param $id id du film
	**/
	function deleteByIdFilm($id){
		global $bd;
   		try{
   			$req = $bd->execute('DELETE FROM film WHERE id_film = ?'); 
   			$req->execute(array($id));
		   }
			catch(PDOException $e)
			{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression du film dans la table film");
   		}
   	}
   	
   	/**
   	 *Modifie les informations d'un film
   	 *@param $idfilm id du film a modifier
	 *@param $newnom nouveau nom du film
	 *@param $newannee nouvelle annee du film
	 *@param $newcat nouvelle categorie du film
   	**/
	function editFilm($idfilm, $newnom, $newannee, $newcat, $newreal, $newacteur){
		global $bd;
   		try{
   			$req = $bd->prepare('UPDATE film SET nom_film = ? , annee_film = ?, cat_film = ?, realisateur_film = ?, acteur_film = ? WHERE id_film = ?');
   			$req->execute(array($newnom,$newannee,$newcat,$newreal, $newacteur, $idfilm));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la modifiation du film dans la table film");
   		}
   	}

   	/**
   	 *Recupere l'id d'un film
   	 *@param $nomfilm nom du film cherche
   	 *@param $anneefilm annee du film cherche
   	**/
	function getIdFilm($nomfilm, $anneefilm){
		global $bd;
   		try{
   			$req = $bd->execute('SELECT id_film FROM film WHERE nom_film = ? AND anneefilm =?');
			$req->execute(array($nom ,$annefilm));
			$res=$req->fetch();
   			return $res[0]; 
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la récupération de l'id dans la table film");
		}
	}

	/**
	 *Recupere le nom du film et l'annee
	 *@param $idfilm if du film
	**/
	function getNameFilmById($idfilm){
		global $bd;
		try{
			$req = $bd->execute('SELECT nom_film, annee_film FROM film WHERE id_film = ?');
			$req->execute(array($idfilm));
			return $req;
		}
		catch(PDOException $e)
		{
			echo($e->getMessage());
			die("<br> Erreur lors de la récupération du nom et de l'annee dans la table film");
		}
	}