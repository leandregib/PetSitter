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
		
		/**
		* Methode de récupération des types d'animaux que l'utilisateur souhaite garder
		* @return array récupère les types d'animaux que l'utilisateur souhaite garder
		*/
		public function getPetType(){
			$intId 		= $_GET['id']??$_SESSION['user']['id'];
			$strRqPetType	= "SELECT pet_type_kind 								  
							FROM pet_type
								INNER JOIN propose ON prop_pet_typeid = pet_type_id
								INNER JOIN users ON prop_userid = user_id
							WHERE user_id = '".$intId."'";
							
			$arrPetType 	= $this->_db->query($strRqPetType)->fetch();
			
			return $arrPetType;
		}
		
	}