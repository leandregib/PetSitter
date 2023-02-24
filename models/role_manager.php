<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de role
	* @creator Jérémy Gallippi
	*/
	class RoleManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des roles
		* @return array Liste des roles
		*/
		public function getRoleId(){
			$strRqRole = "SELECT role_id, role_name FROM role ;";
							
			return $this->_db->query($strRqRole)->fetchAll();
		}
		
	}