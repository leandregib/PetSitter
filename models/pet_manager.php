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
			$strRqPet = "SELECT pet_id, pet_name, pet_birthday, pet_userid, pet_typeid, pet_sexid FROM pet ;";
							
			return $this->_db->query($strRqPet)->fetchAll();
		}

		/**
		* Methode de création d'un pet
		* @param $objPet objet de l'animal à ajouter dans la BDD
		*/
		public function addPet($objPet,$intId){

		// Insertion en BDD, si pas d'erreurs
		$strRqAdd 	= "	INSERT INTO pet
						(pet_id, pet_name, pet_birthday, pet_userid, pet_typeid, pet_sexid)
						VALUES (:id, :name, :birthday, $intId, :typeid, :sexid)";

		// Requête préparée	
		$prep		= $this->_db->prepare($strRqAdd);

		$prep->bindValue(':id', $objPet->getId(), PDO::PARAM_INT);
		$prep->bindValue(':name', $objPet->getName(), PDO::PARAM_STR);
		$prep->bindValue(':birthday', $objPet->getBirthday(), PDO::PARAM_STR);
		$prep->bindValue(':typeid', $objPet->getTypeid(), PDO::PARAM_INT);
		$prep->bindValue(':sexid', $objPet->getSexid(), PDO::PARAM_INT);
	
		return $prep->execute();
		}

		public function updatePet($objPet,$intId){

			// Insertion en BDD, si pas d'erreurs
			$strRqAdd 	= "	UPDATE pet
							(pet_id, pet_name, pet_birthday, pet_userid, pet_typeid, pet_sexid)
							VALUES (:id, :name, :birthday, $intId, :typeid, :sexid)";
	
			// Requête préparée	
			$prep		= $this->_db->prepare($strRqAdd);
	
			$prep->bindValue(':id', $objPet->getId(), PDO::PARAM_INT);
			$prep->bindValue(':name', $objPet->getName(), PDO::PARAM_STR);
			$prep->bindValue(':birthday', $objPet->getBirthday(), PDO::PARAM_STR);
			$prep->bindValue(':typeid', $objPet->getTypeid(), PDO::PARAM_INT);
			$prep->bindValue(':sexid', $objPet->getSexid(), PDO::PARAM_INT);
		
			return $prep->execute();
			}

		/**
		* Méthode permettant de vérifier que l'animal n'existe pas déjà en bdd
		* @param object $objPet Objet de l'animal
		* @return bool l'animal existe ou non
		*/
		public function pet_exist(object $objPet):bool{
			$strRqPet = "SELECT *
							FROM pet
							WHERE pet_name = :petName 
							AND pet_userid = :petUserId
							AND pet_typeid = :petTypeId";				
			$prep	= $this->_db->prepare($strRqPet);
			
			$prep->bindValue(':petName', $objPet->getName(), PDO::PARAM_STR);	
			$prep->bindValue(':petUserId', $objPet->getUserid(), PDO::PARAM_INT);
			$prep->bindValue(':petTypeId', $objPet->getTypeid(), PDO::PARAM_INT);

			$prep->execute();
			$arrPet = $prep->fetch();
			
			return ($arrPet !== false);
		}

		/**
		* Methode de suppression d'un animal
		* @param int $intPetId Id de l'animal à supprimer
		*/
		public function deletePet($intPetId)
		{
			$strDelPet = "DELETE FROM pet WHERE pet_id = $intPetId";
			return $this->_db->exec($strDelPet);
		}

		/**
		* Methode de récupération des animaux de l'utilisateur
		* @return array récupère les animaux de l'utilisateur
		*/
		public function getPet(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqUser 	= "SELECT pet_id,
								  pet_name, 
								  pet_birthday
							FROM pet
								INNER JOIN users ON pet_userid = user_id
							WHERE user_id = '".$intId."'";
							
			$arrUser 	= $this->_db->query($strRqUser)->fetch();
			
			return $arrUser;
		}
	}