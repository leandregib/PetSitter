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

		/**
		* Methode de récupération des types de garde avec l'id de l'utilisateur
		* @return array récupère les types de gardes proposés par l'utilisateur 
		*/
		public function getSitter($intProposeId){
			$strRqSitter	= "SELECT sitter_type 								  
							FROM sitter
								INNER JOIN propose ON prop_sitterid = sitter_id
							WHERE prop_id = '".$intProposeId."'";
							
			$arrSitter 	= $this->_db->query($strRqSitter)->fetch();
			
			return $arrSitter;
		}
		
	}