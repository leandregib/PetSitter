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
			$strRqHome = "SELECT home_id, home_type FROM home ;";
							
			return $this->_db->query($strRqHome)->fetchAll();
		}

		/**
		* Methode de récupération du type d'habitation de l'utilisateur 
		* @return array récupère le type d'habitation de l'utilisateur 
		*/
		public function getHome(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqHome	= "SELECT home_type  								  
							FROM home
								INNER JOIN users ON user_homeid = home_id
							WHERE user_id = '".$intId."'";
							
			$arrHome 	= $this->_db->query($strRqHome)->fetch();
			
			return $arrHome;
		}
		
	}