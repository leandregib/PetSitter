<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet_type
	* @creator Timothée KERN
	*/
	class UserManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des utilisateurs
		* @return array Liste des utilisateurs
		*/
		public function findUser(){
			$strRqSitter = "SELECT user_id, user_name, user_firstname, user_homeid FROM users
				INNER JOIN user_homeid ON user_homeid = home_id ;";
							
			return $this->_db->query($strRqSitter)->fetchAll();
		}

		public function verifUser($strMail, $strPassword){
			$strRqUsers = "SELECT user_id AS 'id', 
								  user_mail AS 'mail', 
								  user_firstname AS 'firstname',
								  user_password 
							FROM users
							WHERE user_mail = '".$strMail."'";
			$arrUser 	= $this->_db->query($strRqUsers)->fetch();

			if ($arrUser !== false){
				//if ($arrUser['user_password'] == $strPassword){ 
				if(password_verify($strPassword, $arrUser['user_password'])) {
					unset($arrUser['user_password']);
					return $arrUser;
				}
			}
			return false;
		
		}
		
		
		public function addUsers($objUser){

           
			// Insertion en BDD, si pas d'erreurs
			$strRqAdd 	= "	INSERT INTO users
								(user_name, user_firstname, user_birthday, user_mail, user_password, user_address, user_phone, user_description, user_cityid, user_roleid, user_homeid)
							VALUES (:name, :firstname, :birthday, :mail, :password, :address, :phone, :description, :cityid, :roleid, :homeid   )";
							
							
			/*('".$objUser->getName()."','".$objUser->getFirstName()."','".$objUser->getBirthday()."','".$objUser->getMail()."','".$objUser->getPassword()."','".$objUser->getAddress()."','".$objUser->getPhone()."', '".$objUser->getDescription()."', '".$objUser->getCityId()."', '2', '5' )*/	
			//return $this->_db->exec($strRqAdd);
			// Requête préparée	
			//var_dump($objUser);die;
			$prep		= $this->_db->prepare($strRqAdd);

			$prep->bindValue(':name', $objUser->getName(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':firstname', $objUser->getFirstName(), PDO::PARAM_STR);
			$prep->bindValue(':password', $objUser->getPassword(), PDO::PARAM_STR);
			$prep->bindValue(':birthday', $objUser->getBirthday(), PDO::PARAM_STR);
			$prep->bindValue(':address', $objUser->getAddress(), PDO::PARAM_STR);
			$prep->bindValue(':cityid', $objUser->getCityId(), PDO::PARAM_INT);
			$prep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
			$prep->bindValue(':description', $objUser->getDescription(), PDO::PARAM_STR);
			$prep->bindValue(':roleid', $objUser->getRoleId(), PDO::PARAM_INT);
			$prep->bindValue(':homeid', $objUser->getHomeId(), PDO::PARAM_INT);
		
			return $prep->execute();				
		
		}

		/**
		* Methode d'ajout d'un type d'habitation pour l'utilisateur
		* @creator Timothée KERN
		* @param $objPetsitter objet du Petsitter à ajouter dans la base de données
		*/		
		public function addHome($objUser){

           
			// Insertion en BDD, si pas d'erreurs
			$strRqAddPetsitter 	= "UPDATE users
								SET user_homeid = :homeid
								WHERE user_id = :userid";
							
			// Requête préparée	
			$prep		= $this->_db->prepare($strRqAddPetsitter);

			$prep->bindValue(':userid', $objPetsitter->getUserId(), PDO::PARAM_INT);
			$prep->bindValue(':homeid', $objPetsitter->getHomeId(), PDO::PARAM_INT);
		
			return $prep->execute();				
		
		}
	}