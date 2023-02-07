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
		* @param int $intLimit Nombre limite de résultats
		* @return array Liste des résultats
		*/
		public function findPetSitter(int $intLimit = 0){
			if(count($_POST) >0){
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
			$intAnimal	= implode(",", $_POST['animal'])??'';
			if ($intAnimal != ''){
				$strRq 		.= $strWhere." pet_type_id IN ( ".$intAnimal.")";
				$strWhere	= " AND ";
			}

			// Traitement du type de garde
			$intSitter	= implode(",", $_POST['garde'])??'';
			if ($intSitter != ''){
				$strRq 		.= $strWhere." sitter_id IN ( ".$intSitter.")";
				$strWhere	= " AND ";
			}

			// Traitement du code postal
			$intCP 	= $_POST['cp']??'';
			if ($intCP != ''){
				$strRq 		.= $strWhere." city_cp = ".$intCP;
			}

			// Classement des résultats
			//$strRq 		.= " ORDER BY city_cp DESC ";
		
				var_dump($strRq);
			//return $this->_db->query($strRq)->fetchAll();
			}

			//Variable Selection de la table dans la base de données 
			$arrResultPetsitter	= $db->query($strRq)->fetchAll();
			
		}
		
	}