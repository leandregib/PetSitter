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
		
	}