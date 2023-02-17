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
		public function findPropose(){
			$strRqSitter = "SELECT prop_id, prop_userid, prop_sitterid, prop_pet_typeid FROM propose
				INNER JOIN propose ON user_userid = user_id ;";
							
			return $this->_db->query($strRqSitter)->fetchAll();
		}

		
		/**
		* Methode de création d'un petsitter
		* @param $objPetsitter objet du Petsitter à ajouter dans la base de données
		*/		
		public function addUsers($objPetsitter){

           
			// Insertion en BDD, si pas d'erreurs
			$strRqAddPetsitter 	= "	INSERT INTO propose
								(prop_userid, prop_sitterid, prop_pet_typeid)
							VALUES (:userid, :sitterid, :pet_typeid)";
							
			// Requête préparée	
			$prep		= $this->_db->prepare($strRqAddPetsitter);

			$prep->bindValue(':userid', $objPetsitter->getUserId(), PDO::PARAM_INT);
			$prep->bindValue(':sitterid', $objPetsitter->getSitterId(), PDO::PARAM_INT);
			$prep->bindValue(':pet_typeid', $objPetsitter->getPetTypeId(), PDO::PARAM_INT);
		
			return $prep->execute();				
		
		}
	}