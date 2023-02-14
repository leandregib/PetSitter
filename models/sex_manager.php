<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de sex
	* @creator Timothée KERN
	*/
	class SexManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des sexes
		* @return array Liste des sexes
		*/
		public function findSex(){
			$strRqSex = "SELECT sex_id, sex_type FROM sex ;";
							
			return $this->_db->query($strRqSex)->fetchAll();
		}
		
	}