<?php
	/**
	*Class model pour fatoriser la connexion a la bd
	*/
abstract class Model{
	/**
	 *@var objet pdo permettant de requêter sur la bd
	 */
	protected $bd;
	/**
	 *@var nom primary key table
	 */	
	protected $pk_key;
	/**
	 *@var nom table
	 */
	protected $table;

	protected function connexion(){
		if ($this->bd == null){
			//Creation connexion
			$dbname='Web';
			$host='localhost';
			$dbuser='root';
			$dbpass='postgres';

			try
			{
				$bd = new PDO("pgsql:host=$host;dbname=$dbname;charset=utf", $dbuser, $dbpass);
				$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return$bd
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
				die('<br> Echec lors de la connexion à la BD');
			}
		}
		return $this->bd;
	}
  
    /**
    * Envoyer des requêtes à la BD
    * @param String $postgres requête PostgreSQL bien formée
    * @param Array params les paramétres passés
    * @return renvoie le résultat de la requête
    **/
	protected function query($postgres, $params = null){
		if ($params == null){
			$resultat = $this->connexion()->query($postgres); //execute la requete
		}else{
			$resultat = $this->connexion()->prepare($postgres); //prepare requete avec parametres passes
			$resultat->execute($params);
		}
		return $resultat;
	}

	/**
	* Liste tous les objets d'une table
	* @return Array contenant tous les objets de la table
	**/	
	public function selectAll(){
		try{
			$postgres = 'SELECT * FROM '.$this->table;
			$req = $this->query($postgres);
			$res = $req->fetchALL(PDO::FETCH_ASSOC);
			return $res;
		}
		catch (PDOException $e)
		{
			echo($e->getMessage());
			die("<br> Erreur lors de la recherche de la recherche de tous les objets de la table" . $this->table);
		}
	}
	/**
 	* Selectionner un objet d'une table
 	* @param  $id idenfiant un seul objet
 	* @return un seul objet correspondant au paramètre passé
  	**/
  	public function selectById($id){
  		try{
  			$postgres = 'SELECT * FROM '.$this->table.' WHERE '.$this->pk_key.' = :id';
  			$req = $this->query($postgres,array(":id"=>$id));
  			$res = $req ->fetch(PDO::FETCH_ASSOC);
  			return $res; 	
  		}
  		catch (PDOException $e)
  		{
  			echo($e->getMessage());
  			die("<br> Erreur lors de la recherche de l'objet dans la table" . $this->table);
  		}
  	}
  	/**
   	* Compter le nombre d'entité
   	* @return int Nombre d'individu de la table
   	**/	
   	public function countAll(){
   		try{
   			$postgres = 'SELECT COUNT(*) FROM '.$this->table;
   			$req = $this->query($postgres);
   			$res = $req->fetchColumn();
   			return $res;   		
   		}
   		catch(PDOException $e){
   			
   		}
   	}
}



?>