<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet
	* @creator Timothée KERN
	*/
	class PetManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des pets
		* @return array Liste des pets
		*/
		public function findPet(){
			$strRqPet = "SELECT pet_id, pet_name, pet_userid, pet_typeid, pet_sexid FROM pet ;";
							
			return $this->_db->query($strRqPet)->fetchAll();
		}

		/**
		* Methode de création d'un pet
		*/
		public function addPet($objPet){

		// Insertion en BDD, si pas d'erreurs
		$strRqAdd 	= "	INSERT INTO pet
						(pet_name, pet_userid, pet_typeid, pet_sexid)
						VALUES (:name, :birthday, :userid, :typeid, :sexid)";

		// Requête préparée	
		$prep		= $this->_db->prepare($strRqAdd);

		$prep->bindValue(':name', $objPet->getName(), PDO::PARAM_STR);
		$prep->bindValue(':birthday', $objPet->getBirthday(), PDO::PARAM_STR);
		$prep->bindValue(':userid', $objPet->getUserid(), PDO::PARAM_INT);
		$prep->bindValue(':typeid', $objPet->getTypeid(), PDO::PARAM_INT);
		$prep->bindValue(':sexid', $objPet->getSexid(), PDO::PARAM_INT);
	
		return $prep->execute();
		}
	}