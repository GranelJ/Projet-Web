<?php

require_once("Model.php");

/**
 * Class ModelAdministrateur
 */
class ModelAdministrateur extends Model{

    /**
     * @var nom de la clé primaire de la table
     */
  protected $pk_key = "id_administrateur";


    /**
     * @var nom de la table
     */
  protected $table  = "administrateur";

  /**
   * Selectionner tous les administrateurs de la table sauf soit même
   * @param $idAdmin identifiant de l'administrateur
   * @return La liste ne contient pas l'id de l'administrateur passé en paramètres
   */
  public function selectAll($idAdmin){
      try{
          $postgres = 'SELECT '.$this->pk_key.',email_admin FROM '.$this->table.' WHERE '.$this->pk_key.' != '.$idAdmin;
          $req = $this->query($postgres);
          $res = $req->fetchAll(PDO::FETCH_ASSOC);
          return $res;
      }
      catch (PDOException $e)
      {
          echo($e->getMessage());
          die("<br> Erreur lors de la recherche de tous les objets de la table " . $this->table);
      }
  }

  /**
  * Créer un compte administrateur
  * @param $data tableau associatif contenant le nom, prenom, mail et mdp crypté à insérer
  */
  public function createAdministrateur($data){
    try{
      $postgres = 'INSERT INTO '.$this->table.' (email_admin, mdp_admin) VALUES(:email, :mdp)';

      $req = $this->query($sql,array(
                              ':email'=> $data['mail'],
                              ':mdp' => $data['mdp']));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout d'un administrateur à la table " . $this->table);
    }
  }
  /**
   * Selectionner un administrateur par son mail
   * @param  $mail adresse e-mail de l'admin
   * @return contenant l'administrateur
   **/
  public function selectByMailAdmin($mail){
    try{
      $postgres = 'SELECT * FROM '.$this->table.' WHERE email_admin = :mail';
      $req = $this->query($postgres,array(":mail"=>$mail));
      $res = $req->fetch(PDO::FETCH_ASSOC);
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la selection de l'administrateur dans la table " . $this->table);
    }
  }

  /**
  * Modifier le mot de passe
  * @param  $newMdp nouveau mot de passe
  * @param  $idAdministrateur id de l'administrateur
  **/
  public function editMdpAdmin($newMdp, $idAdministrateur){
    try{
      $postgres = 'UPDATE '.$this->table.' SET mdp_admin = :newMdp WHERE '.$this->pk_key.' = :id_administrateur';
      $req = $this->query($postgres,array(':newMdp' => $newMdp,
                                     ':id_administrateur' => $idAdministrateur));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification du mot de passe dans la table " . $this->table);
    }
  }
    /**
     * Supprimer un administrateur
     * @param int $id identifiant de l'administrateur
     **/
    public function deleteById($id){
        try{
            $postgres = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
            $req = $this->query($postgres,array(':id'=>$id));
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la suppression de l'administrateur dans la table ". $this->table);
        }
    }

    /**
     *Recupère mdp d'un admin
     *@param mail de l'admin
    **/
    public function getMdpAdmin($mail){
      try{
        $postgres = 'DELETE FROM '.$this->table.' WHERE email_admin = :email';
        $req = $this->query($postgres; array(':email'=>$mail));
      }
      catch(PDOException $e)
      {
        echo($e->getMessage());
        die("<br> Erreur lors de la recupération du mot de passe dans la table" . $this->table);
      }
    }
}
?>
