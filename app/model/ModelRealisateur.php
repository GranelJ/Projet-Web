<?php

require_once("Model.php");

/**
 *Class ModelRealisateur
*/

class ModelRealisateur extends Model{

	/**
     * @var nom de la clé primaire de la table
     */
    protected $pk_key = "id_realisateur";

    /**
     * @var nom de la table
     */
    protected $table = "realisateur";

    /**
   	 *Retourne les realisateurs
   	**/
   	public function selectAll(){
   		try{
   			$postgres = 'SELECT'.$this->pk_key,.',nom_realisateur,prenom_realisateur FROM '.$this->table;
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
   	public function createRealisateur($data){
   		try{
   			$postgres = 'INSERT INTO '.$this->table.'(nom_realisateur, prenom_realisateur)
   			 VALUES(:nom_realisateur, :prenom_realisateur)';
   			$req = $this->querry($postgres, array(
   											':nom_realisateur' => $data['nom'],
   											':prenom_realisateur'=> $data['prenom']));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'un realisateur à la table" . $this->table);
   		}
   	}

   	/**
   	 *Supprimer un realisateur
   	 *@param $id identifiant du realisateur
   	**/
   	public function deleteById($id){
   		try{
   			$postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
   			$req = $this->query($postgres,array(':id'=>$id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression du realisateur dans la table" . $this->table);
   		}
   	}
}
?>