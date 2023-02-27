<?php
	require_once("connect.php");//Classe mère des managers
	/**

	* Class manager de pet_type
	* @creator Timothée KERN

	* Class manager des users
	* @creator Jérémy Gallippi

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
			$strRqSitter = "SELECT user_id, user_name, user_firstname, user_homeid, user_roleid FROM users
				 ;";
							
			return $this->_db->query($strRqSitter)->fetchAll();
		}

		public function verifUser($strMail, $strPassword){
			$strRqUsers = "SELECT user_id AS 'id', 
								  user_mail AS 'mail', 
								  user_firstname AS 'firstname',
								  user_roleid AS 'role',
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

		//fonction de modif de compte utilisateur
		public function updateUser($objUser){
			$strRqUpdate	= "UPDATE users 
								SET user_name = :name, 
									user_firstname = :firstname, 
									user_mail = :mail,
									user_birthday = :birthday,
									user_address  = :address,
									user_cityid   = :cityid,
									user_phone    = :phone,
									user_description = :description,
									user_roleid   = :roleid,
									user_homeid   = :homeid";
									if ($objUser->getPassword() != ''){
										$strRqUpdate	.=	", user_password = :password";
									}

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
			//var_dump($prep->execute());die;
			return $prep->execute();
		}
		
		public function getUser(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqUser 	= "SELECT user_id AS 'id', 
								  user_firstname AS 'firstname', 
								  user_name AS 'name', 
								  user_mail AS 'mail',
								  user_address AS 'address',
								  user_phone AS 'phone',
								  user_description AS 'description',
								  user_cityid AS 'cityid',
								  user_birthday AS 'birthday'
								  
							FROM users
							WHERE user_id = '".$intId."'";
							
			$arrUser 	= $this->_db->query($strRqUser)->fetch();
			
			return $arrUser;
		}


		

		/**
        * Methode d'ajout d'un type d'habitation pour l'utilisateur
        * @creator Timothée KERN
        * @param $objUser objet de l'utilisateur à modifier dans la base de données
		* @param $intId int Id de l'utilisateur connecté
        */
        public function editHome(object $objUser, int $intId){


            // Insertion en BDD, si pas d'erreurs
            $strRqAddPetsitter     = "UPDATE users
                                SET user_homeid = :homeid
                                WHERE user_id = $intId";

            // Requête préparée
            $prep        = $this->_db->prepare($strRqAddPetsitter);

            $prep->bindValue(':homeid', $objUser->getHomeId(), PDO::PARAM_INT);

            return $prep->execute();

        }
		
		/**
		* Méthode permettant de vérifier que le mail n'existe pas déjà en bdd
		* @param object $objUser Objet de l'utilisateur
		* @return bool le mail existe ou non
		*/
		public function mail_exist(object $objUser):bool{
			$strRqUsers = "SELECT *
							FROM users
							WHERE user_mail = :mail";
			if ($objUser->getId() != ''){
				$strRqUsers	.=	" AND user_id <> :id";
			}							
			$prep	= $this->_db->prepare($strRqUsers);
			
			$prep->bindValue(':mail', $objUser->getMail(), PDO::PARAM_STR);	
			if ($objUser->getId() != ''){
				$prep->bindValue(':id', $objUser->getId(), PDO::PARAM_INT);	
			}

			$prep->execute();
			$arrUser = $prep->fetch();
			
			return ($arrUser !== false);
		}

		/**
		* Méthode permettant de supprimer un utilisateur
		* @param object $objUser Objet de l'utilisateur
		*/
		public function deleteUser()
		{
			$intId = $_GET['id']??$_SESSION['user']['id'];
			$strDelUserQuery = "DELETE FROM users WHERE user_id = $intId";
			return $this->_db->exec($strDelUserQuery);
		}

		/**
		* Méthode permettant de récupérer le role d' un utilisateur
		* @param object $intId Objet de l'utilisateur
		*/
		public function findRole($intId){
			$strRqRole ="SELECT user_roleid AS role_id, role_name FROM users 
							INNER JOIN role ON user_roleid = role_id
							 WHERE user_id = $intId";
			return $this->_db->query($strRqRole)->fetchAll();
		}
		
		
	}