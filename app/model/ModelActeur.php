<?php

require_once("Model.php");

/**
 *Class ModelActeur
*/

class ModelActeur extends Model{

	/**
     * @var nom de la clé primaire de la table
     */
    protected $pk_key = "id_acteur";

    /**
     * @var nom de la table
     */
    protected $table = "acteur";

    /**
   	 *Retourne les acteurs
   	**/
   	public function selectAll(){
   		try{
   			$postgres = 'SELECT'.$this->pk_key.',nom_acteur,prenom_acteur FROM '.$this->table;
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
   	 *Creer un acteur
   	 *@param $data donnee du formulaire
   	**/
   	public function createActeur($data){
   		try{
   			$postgres = 'INSERT INTO '.$this->table.'nom_acteur, prenom_acteur)
   			 VALUES(:prenom_acteur, :nom_acteur)';
   			$req = $this->querry($postgres, array(
   											':enom_acteur' => $data['nom'],
   											':prenom_acteur'=> $data['prenom']));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'un acteur à la table" . $this->table);
   		}
   	}

   	/**
   	 *Supprimer un acteur
   	 *@param $id identifiant de l'acteur
   	**/
   	public function deleteById($id){
   		try{
   			$postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
   			$req = $this->query($postgres,array(':id'=>$id));
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression de l'acteur dans la table" . $this->table);
   		}
   	}
	/**
	 *Get id d'un acteur
	 *@param $nomact nom de l'acteur
	 *@param $prenomact prenom de l'acteur
	**/
	public function getId($nomact, $prenomact){
		try{
			$postgres = 'DELETE FROM'.$this->table.' WHERE nom_acteur = :nomact AND prenom_acteur = :prenomact';
			$req = $this->query($postgres,array(':nomact'=>$nomact,
												':prenomact'=>$prenomact));
		}
		catch(PDOException $e){
			echo($e->getMessage());
			die("<br> Erreur lors de la recuperation de l'id dans la table" . $this->table);
		}
	}
}
?>