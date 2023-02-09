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
							
			return $this->_db->query($strRqUser)->fetchAll();
		}

		public function verifUser($strMail, $strPassword){
			$strRqUsers = "SELECT user_id AS 'id', 
								  user_mail AS 'mail', 
								  user_password 
							FROM users
							WHERE user_mail = '".$strMail."'";
			$arrUser 	= $this->_db->query($strRqUsers)->fetch();

			if ($arrUser !== false){
				//if ($arrUser['user_pwd'] == $strPwd){ 
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
							VALUES (:name, :firstname, :mail, :password, :birthday, :address, :phone, :description, :cityid, 2, 5   )";
							
							
			/*('".$objUser->getName()."','".$objUser->getFirstName()."','".$objUser->getBirthday()."','".$objUser->getMail()."','".$objUser->getPassword()."','".$objUser->getAdress()."','".$objUser->getPhone()."', '".$objUser->getDescription()."', '".$objUser->getCityId()."', '2', '5' )*/	
			//return $this->_db->exec($strRqAdd);
			// Requête préparée	
			
			$prep		= $this->_db->prepare($strRqAdd);

			$prep->bindValue(':name', $objUser->getName(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':firstname', $objUser->getFirstName(), PDO::PARAM_STR);
			$prep->bindValue(':password', $objUser->getPassword(), PDO::PARAM_STR);
			$prep->bindValue(':birthday', $objUser->getbirthday(), PDO::PARAM_STR);
			$prep->bindValue(':address', $objUser->getAddress(), PDO::PARAM_STR);
			$prep->bindValue(':cityid', $objUser->getCityId(), PDO::PARAM_STR);
		
			return $prep->execute();				
		
		}
	}