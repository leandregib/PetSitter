<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet_type
	* @creator Timothée KERN
	*/
	class SitterManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des types d'animaux
		* @return array Liste des types d'animaux
		*/
		public function findSitter(){
			$strRqSitter = "SELECT sitter_id, sitter_type FROM sitter ;";
							
			return $this->_db->query($strRqSitter)->fetchAll();
		}
		
	}