<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet_type
	* @creator Timothée KERN
	*/
	class PetTypeManager extends Manager{
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
		public function findPetType(){
			$strRqPetType = "SELECT pet_type_id, pet_type_kind FROM pet_type ;";
							
			return $this->_db->query($strRqPetType)->fetchAll();
		}
		
	}