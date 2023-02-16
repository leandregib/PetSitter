<?php
	require_once("connect.php");//Classe mère des managers
	/**
<<<<<<< Updated upstream
	* Class manager de pet_type
	* @creator Timothée KERN
=======
	* Class manager des users
	* @creator Jérémy Gallippi
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
        public function findUsers(){
			$strRqUsers = "SELECT user_id, user_firstname FROM users;";
							
			return $this->_db->query($strRqUsers)->fetchAll();
		}
		
		public function verifUser($strMail, $strPwd){
			$strRqUsers = "SELECT user_id AS 'id', 
								  user_mail AS 'mail', 
								  user_password
							FROM users
							WHERE user_mail = '".$strMail."'";
			$arrUser 	= $this->_db->query($strRqUsers)->fetch();
            var_dump($strRqUsers);
			if ($arrUser !== false){
				if ($arrUser['user_password'] == $strPwd){
>>>>>>> Stashed changes
					unset($arrUser['user_password']);
					return $arrUser;
				}
			}
			return false;
<<<<<<< Updated upstream
		
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

		public function updateUser($objUser){
			$strRqUpdate	= "UPDATE users 
								SET user_name = :name, 
									user_firstname = :firstname, 
									user_mail = :mail";
			if ($objUser->getPassword() != ''){
				$strRqUpdate	.=	", user_password = :password";
			}
			$strRqUpdate	.= " WHERE user_id = ".$objUser->getId();//$_SESSION['user']['id'];
			$prep			= $this->_db->prepare($strRqUpdate);
			
			$prep->bindValue(':name', $objUser->getName(), PDO::PARAM_STR);
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);
			$prep->bindValue(':firstname', $objUser->getFirstName(), PDO::PARAM_STR);
			if ($objUser->getPassword() != ''){
				$prep->bindValue(':password', $objUser->getPassword(), PDO::PARAM_STR);
			}
			$prep->bindValue(':birthday', $objUser->getBirthday(), PDO::PARAM_STR);
			$prep->bindValue(':address', $objUser->getAddress(), PDO::PARAM_STR);
			$prep->bindValue(':cityid', $objUser->getCityId(), PDO::PARAM_INT);
			$prep->bindValue(':phone', $objUser->getPhone(), PDO::PARAM_STR);
			$prep->bindValue(':description', $objUser->getDescription(), PDO::PARAM_STR);
			$prep->bindValue(':roleid', $objUser->getRoleId(), PDO::PARAM_INT);
			$prep->bindValue(':homeid', $objUser->getHomeId(), PDO::PARAM_INT);
			
			return $prep->execute();
		}
		

=======
		}


		public function addUsers($objUser){

           
				// Insertion en BDD, si pas d'erreurs
				$strRqAdd 	= "	INSERT INTO users
									(user_name, user_firstname, user_birthday, user_mail, user_password, user_address, user_phone, user_description, user_cityid )
								VALUES 
                                ('".$objUser->getName()."','".$objUser->getFirstName()."','".$objUser->getBirthday()."','".$objUser->getMail()."','".$objUser->getPassword()."','".$objUser->getAdress()."','".$objUser->getPhone()."', '".$objUser->getDescription()."', '".$objUser->getCityId()."')";
				
			
			return $this->_db->exec($strRqAdd);				
			
		}
		
>>>>>>> Stashed changes
	}