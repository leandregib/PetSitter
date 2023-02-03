<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet_type
	* @creator Timothée KERN
	*/
	class HomeManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des types de logement
		* @return array Liste des types de logement
		*/
		public function findHome(){
			$strRqSitter = "SELECT home_id, home_type FROM home ;";
							
			return $this->_db->query($strRqHome)->fetchAll();
		}
		
	}