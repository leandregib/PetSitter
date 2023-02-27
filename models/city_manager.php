<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de city
	* @creator Timothée KERN
	*/
	class CityManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des villes
		* @return array Liste des villes
		*/
		public function findCity(){
			$strRqCity = "SELECT city_id, city_name, city_cp FROM city ;";
							
			return $this->_db->query($strRqCity)->fetchAll();
		}

		/**
		* Methode de récupération des villes avec l'id de l'utilisateur 
		* @return array récupère le nom de la ville de l'utilisateur 
		*/
		public function getCity(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqCity 	= "SELECT city_name  								  
							FROM city
								INNER JOIN users ON user_cityid = city_id
							WHERE user_id = '".$intId."'";
							
			$arrCity 	= $this->_db->query($strRqCity)->fetch();
			
			return $arrCity;
		}
		
	}