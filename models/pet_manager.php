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
		*@author Jérémy Gallippi 
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

		/**
		* @author Jérémy Gallippi
		* Methode de modification d'un pet
		* @param $objPet objet de l'animal à ajouter dans la BDD
		*/
		public function updatePet($objPet){

			// Insertion en BDD, si pas d'erreurs
			$strRqUpPet 	= "	UPDATE pet
								SET pet_name 	 = :name,
								 	pet_birthday = :birthday,
								  	pet_typeid 	 = :typeid,
								   	pet_sexid	 = :sexid
								WHERE pet_id = ".$objPet->getId();				
			// Requête préparée	
			$prep		= $this->_db->prepare($strRqUpPet);
	
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
		* @author Jérémy Gallippi
		* Methode de suppression d'un animal
		* @param int $intPetId Id de l'animal à supprimer
		*/
		public function deletePet($intId)
		{
			$strDelPet = "DELETE FROM pet WHERE pet_id = ".$intId;	
			return $this->_db->exec($strDelPet);
		}

		/**
		* @author Timothée KERN
		* Méthode de récupération des animaux de l'utilisateur 
		* @return array récupère l'id, le nom et la date d'anniversaire des animaux de l'utilisateur
		*/
		public function getPetDisplay(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqPet	= "SELECT pet_id,
								  pet_name, 
								  pet_birthday
								  pet_userid
							FROM pet
								INNER JOIN users ON pet_userid = user_id
							WHERE user_id = '".$intId."'";
							
			$arrPet	= $this->_db->query($strRqPet)->fetchAll();

			return $arrPet;
		}

		/**
		* @author Jérémy Gallippi
		* Methode de récupération d'un animal
		* @param int $intPetId Id de l'animal 
		*/
		public function getPet($intId){
			
			$strRqPet 	= "SELECT pet_id,
								  pet_name, 
								  pet_birthday, 
								  pet_userid ,
								  pet_typeid ,
								  pet_sexid 
							FROM pet
							WHERE pet_id = ".$intId;
							
							
			$arrPet 	= $this->_db->query($strRqPet)->fetch();
			
			return $arrPet;
		}

	}