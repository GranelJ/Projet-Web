<?php

require_once("Model.php");

  /**
   * Selectionner tous les administrateurs de la table sauf soit même
   * @return La liste ne contient pas l'id de l'administrateur passé en paramètres
   */
  function selectAllAdmin($idAdmin){
      global $bd;
      try{
          $req = $bd->prepare('SELECT email_admin FROM administrateur');
          $req->execute();
          return $req;
      }
      catch (PDOException $e)
      {
          echo($e->getMessage());
          die("<br> Erreur lors de la recherche de tous les objets de la table administrateur");
      }
  }

  /**
  * Créer un compte administrateur
  * @param $email de l'admin
  * @param $mdp de l'admin
  **/
  function createAdministrateur($email,$mdp){
    global $bd;
    try{
      $req = $bd->prepare('INSERT INTO administrateur (email_admin, mdp_admin) VALUES(?, ?)');
      $req->execute(array($mail,$mdp));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout d'un administrateur à la table administrateur");
    }
  }
  /**
   * Récupère l'id d'un administrateur par son mail
   * @param  $mail adresse e-mail de l'admin
   * @return id de l'administrateur
   **/
  function getIdAdmin($mail){
    global $bd;
    try{
      $req = $bd->prepare('SELECT id_administrateur FROM administrateur WHERE email_admin = ?');
      $req->execute(array($mail));
      return $req;
    }
    catch(PDOException $e)
    {
      echo($e->getMessage());
      die("<br> Erreur lors de la selection de l'administrateur dans la table administrateur");
    }
  }

  /**
  * Modifier le mot de passe
  * @param  $newMdp nouveau mot de passe
  * @param  $idAdministrateur id de l'administrateur
  **/
  function editMdpAdmin($newMdp, $idAdministrateur){
    global $bd;
    try{
      $req = $bd->prepare('UPDATE administrateur SET mdp_admin = ? WHERE id_administrateur = ?');
      $req->execute(array($newMdp,$idAdministrateur));
    }
    catch(PDOException $e)
    {
      echo($e->getMessage());
      die("<br> Erreur lors de la modification du mot de passe dans la table administrateur");
    }
  }
    /**
     * Supprimer un administrateur
     * @param int $id identifiant de l'administrateur
     **/
    function deleteByIdAdmin($id){
        global $bd;
        try{
            $req = $bd->prepare('DELETE FROM administrateur WHERE id_administrateur=?');
            $req->execute(array($id));
        }
        catch(PDOException $e)
        {
            echo($e->getMessage());
            die("<br> Erreur lors de la suppression de l'administrateur dans la table administrateur");
        }
    }

    /**
     *Recupère mdp d'un admin
     *@param mail de l'admin
    **/
    function getMdpAdmin($mail){
      global $bd;
      try{
        $req = $bd->prepare('SELECT mdp_admin FROM administrateur WHERE email_admin = ?');
        $req->execute(array($mail));
      }
      catch(PDOException $e)
      {
        echo($e->getMessage());
        die("<br> Erreur lors de la recupération du mot de passe dans la table administrateur");
      }
    }
?>
