<?php

require_once("Model.php");

/**
 *Class ModelCategorieFilm
*/

class ModelCategorieFilm extends Model{

	/**
     * @var nom de la clé primaire de la table
     */
    protected $pk_key = "id_catfilm";

    /**
     * @var nom de la table
     */
    protected $table = "categorie_film";

    /**
   	 *Retourne les categories de films
   	**/
   	public function selectAll(){
   		try{
   			$postgres = 'SELECT'.$this->pk_key,.',lib_cat FROM '.$this->table;
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
   	 *Creer un realisateur
   	 *@param $data donnee du formulaire
   	**/
   	public function createCategorieFilm($data){
   		try{
   			$postgres = 'INSERT INTO '.$this->table.'(lib_cat)
   			 VALUES(:lib_cat)';
   			$req = $this->querry($postgres, array(
   											':lib_cat' => $data['cat']));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'une catégorie à la table" . $this->table);
   		}
   	}

   	/**
   	 *Supprimer une categorie
   	 *@param $id identifiant de la categorie
   	**/
   	public function deleteById($id){
   		try{
   			$postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
   			$req = $this->query($postgres,array(':id'=>$id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression de la catégorie dans la table" . $this->table);
   		}
   	}
}
?>