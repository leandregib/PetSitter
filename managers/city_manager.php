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
		
	}