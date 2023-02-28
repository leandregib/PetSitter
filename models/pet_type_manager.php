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
		* Methode de récupération des types d'animaux de l'utilisateur
		* @param int $intPetId Id de l'animal 
		* @return string $strPetType récupère les types d'animaux de l'utilisateur 
		*/
		public function getPetType($intPetId){
			$strRqPetType	= "SELECT pet_type_kind 								  
							FROM pet_type
								INNER JOIN pet ON pet_typeid = pet_type_id
							WHERE pet_id = '".$intPetId."'";
							
			$strPetType 	= $this->_db->query($strRqPetType)->fetch();
			
			return $strPetType;
		}

		/**
		* Methode de récupération des types d'animaux que l'utilisateur souhaite garder
		* @param int $intProposeId Id de la garde proposée 
		* @return array récupère les types d'animaux que l'utilisateur souhaite garder
		*/
		public function getPetTypeSitter($intProposeId){
			$strRqPetType	= "SELECT pet_type_kind 								  
							FROM pet_type
								INNER JOIN propose ON prop_pet_typeid = pet_type_id
							WHERE prop_id = '".$intProposeId."'";
							
			$arrPetType 	= $this->_db->query($strRqPetType)->fetch();
			
			return $arrPetType;
		}
		
	}