<?php

require_once("Model.php");

/**
 *Class ModelFilm
*/

class ModelFilm extends Model{

	/**
	 *@var nom de la cle primaire de la table
	**/
	protected $pk_key ="id_film";

	/**
	 *@var nom de la table
	**/
	protected $table = "film";

	/**
	 *Retourne tous les films
	**/
	public function selectAll(){
		try{
		 	$postgres = 'SELECT'.$this->pk_key,.',nom_film,annee_film FROM '.$this->table;
   			$req = $this->query($postgres);
   			$res = $req->fetchAll(PDO::FETCH_ASSOC);
   			return $res;
		}
		catch (PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de tous les objet de la table" . $this->table);
   		}
	}

	/**
	 *Creer un film
	 *@param $data donnee du formulaire
	**/
	public function createFilm($data){
		try{
			$postgres = 'INSERT INTO '.$this->table'(nom_film, annee_film)	
			VALUES(:nom_film, :annee_film)';
			$req = $this->query($postgres,array(':nom_film'=>$data['nom'], ':annee_film'=>$data['annee']));
		}
		catch(PDOException $e){
			echo($e->getMessage());
			die("<br> Erreur lors de l'ajout du film à la table" . $this->table);
		}
	}

	/**
	 *Supprime un film
	 *@param $id id du film
	**/
	public function deleteById($id){
   		try{
   			$postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
   			$req = $this->query($postgres,array(':id'=>$id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression du film dans la table");
   		}
   	}
   	
}


?>