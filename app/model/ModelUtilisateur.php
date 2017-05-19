<?php

require_once("Model.php");

/**
 *Class ModelUtilisateur
*/

class ModelUtilisateur extends Model{

    /**
     * @var nom de la clé primaire de la table
     */
    protected $pk_key = "id_utilisateur";

    /**
     * @var nom de la table
     */
    protected $table = "utilisateur";

    /**
   	 *Retourne les utilisateurs sans leurs mot de passe
   	**/
   	public function selectAll(){
   		try{
   			$postgres = 'SELECT'.$this->pk_key.',email_util FROM '.$this->table;
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
   	 *Creer un utilisateur
   	 *@param $email email de l'utilisateur
       *@param $mdp mot de passe de l'utilisateur
   	**/
   	public function createUtilisateur($email, $mdp){
   		try{
   			$postgres = 'INSERT INTO '.$this->table.'(email_util, mdp_util)
   			 VALUES(:email_util, :mdp_util)';
   			$req = $this->querry($postgres, array(
   											':email_util' => $email,
   											':mdp_util'=> $mdp));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getmessage());
   			die("<br> Erreur lors de l'ajout d'un étudiant à la table" . $this->table);
   		}
   	}
   	/**
   	 *Modifier le mot de passe d'un utilisateur
   	 *@param $newMdp nouveau mot de passe
   	 *@param $idutilisateur id de l'utilsateur
   	**/
   	public function editMdpUtilisateur($newMdp, $idutilisateur){
   		try{
   			$postgres = 'UPDATE '.$this->table.' SET mdp_util = :newMdp WHERE '.$this->pk_key.' = :idutilisateur';
   			$req = $this->query($postgres,array(':newMdp' => $newMdp,
   												':idutilisateur' => $idutilisateur));
   		}
   		catch(PDOException $e)
   		{
   			echo($e->getMessage());
   			die("<br> Erreur lors de la modification du mot de passe dans la table" . $this->table);
   		}
   	}
   	
   	/**
   	 *Selectionner un utilisateur par son email
   	 *@param $mail adresse email de l'utilisateur
   	 *@return Etudiant concerné par l'email
   	**/
   	public function selectByMailUtil($mail){
   		try{
   			$postgres = 'SELECT * FROM '.$this->table.' WHERE email_util = :mail';
   			$req = $this->query($postgres,array(":mail"=>$mail));
   			$res = $req->fetch(PDO::FETCH_ASSOC);
   			return $res;
   		}
   		catch(PDOException $e){
   			echo($e->getMessage());
   			die("<br> Erreur lors de la recherche de l'utilisateur dans la table" . $this->table);
   		}
   	}

   	/**
   	 *Supprimer un utilisateur
   	 *@param $id identifiant de l'utilisateur
   	**/
   	public function deleteById($id){
   		try{
   			$postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
   			$req = $this->query($postgres,array(':id'=>$id));
   		}
   		catch(PDOException $e)
      {
   			echo($e->getMessage());
   			die("<br> Erreur lors de la supression de l'utilsateur dans la table" . $this->table);
   		}
   	}

    /**
     *Recupère mdp d'un utilisateur
     *@param mail de l'utilisateur
    **/
    public function getMdpUtil($mail){
      try{
        $postgres = 'SELECT mdp_util FROM '.$this->table.' WHERE email_util = :email';
        $req = $this->query($postgres, array(':email'=>$mail));
      }
      catch(PDOException $e)
      {
        echo($e->getMessage());
        die("<br> Erreur lors de la recupération du mot de passe dans la table" . $this->table);
      }
    }

    /**
     *Recupère id d'un utilisateur
     *@param mail de l'utilisateur
    **/
    public function getIdUtil($mail){
      try{
        $postgres = 'SELECT id_utilisateur FROM '.$this->table.' WHERE email_util = :email';
        $req = $this->query($postgres, array(':email'=>$mail));
      }
      catch(PDOException $e)
      {
        echo($e->getMessage());
        die("<br> Erreur lors de la recupération de l'id dans la table" . $this->table);
      }
    }
}

?>