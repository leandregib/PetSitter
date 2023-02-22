<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de propose
	* @creator Timothée KERN
	*/
	class ProposeManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des petsitters
		* @return array Liste des petsitters
		*/
		public function findPetsitter(){
			$strRqSitter = "SELECT prop_id, prop_userid, prop_sitterid, prop_pet_typeid FROM propose
				INNER JOIN propose ON user_userid = user_id ;";
							
			return $this->_db->query($strRqSitter)->fetchAll();
		}
		
		/**
		* Methode de récupération des infos du Petsitter connecté
		* @param $intId int id de l'utilisateur 
		* @return bool retourne vrai si trouve un petsitter avec l'id renseigné dans la BDD
		*/
		public function getPetsitter(int $intId):bool{
			$strRqPetsitter 	= "SELECT * 								  
							FROM propose
							WHERE prop_userid = ".$intId;
							
			$arrPetsitter = $this->_db->query($strRqPetsitter)->fetch();
			
			return ($arrPetsitter !== false);
		}
		
		/**
		* Methode de création d'un petsitter
		* @param $objPetsitter objet du Petsitter à ajouter dans la base de données
		* @param $intId int Id de l'utilisateur connecté
		*/		
		public function addPetsitter(object $objPetsitter, int $intId){

           
			// Insertion en BDD, si pas d'erreurs
			$strRqAddPetsitter 	= "	INSERT INTO propose
								(prop_userid, prop_sitterid, prop_pet_typeid)
							VALUES ($intId, :sitterid, :pet_typeid)";
							
			// Requête préparée	
			$prep		= $this->_db->prepare($strRqAddPetsitter);

			$prep->bindValue(':sitterid', $objPetsitter->getSitterId(), PDO::PARAM_INT);
			$prep->bindValue(':pet_typeid', $objPetsitter->getPetTypeId(), PDO::PARAM_INT);
		
			return $prep->execute();				
		
		}
	}