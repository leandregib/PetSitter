<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager des articles
	* @creator Timothée KERN 
	*/
	class SearchManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des petsitters
		* @return array Liste des résultats
		*/
		public function findPetSitter(){
			
				// Début de la requête
			$strRq 		= "	SELECT DISTINCT city_name, user_name, user_birthday, home_type
							FROM users
								INNER JOIN propose ON prop_userid = user_id
								INNER JOIN pet_type ON prop_pet_typeid = pet_type_id
								INNER JOIN sitter ON prop_sitterid = sitter_id
								INNER JOIN home ON user_homeid = home_id
								INNER JOIN city ON user_cityid = city_id ";
			$strWhere	= " WHERE ";
			
			
			// Traitement du type d'animal
			$intAnimal = $_POST['animal']??'';
			if ($intAnimal != ''){
				$intAnimal	= implode(",", $_POST['animal'])??'';
				$strRq 		.= $strWhere." pet_type_id IN ( ".$intAnimal.")";
				$strWhere	= " AND ";
			}

			// Traitement du type de garde
			$intSitter = $_POST['garde']??'';
			if ($intSitter != ''){
				$intSitter	= implode(",", $_POST['garde'])??'';
				$strRq 		.= $strWhere." sitter_id IN ( ".$intSitter.")";
				$strWhere	= " AND ";
			}

			// Traitement du code postal
			$intCP 	= $_POST['cp']??'';
			if ($intCP != ''){
				$strRq 		.= $strWhere." city_cp = ".$intCP;
			}

			// Classement des résultats
			$strRq 		.= " ORDER BY city_cp";
			

			//Variable Selection de la table dans la base de données 
			return $this->_db->query($strRq)->fetchAll();
			
		}
		
	}