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
		public function findArticles(int $intLimit = 0){
			// Début de la requête
			$strRq 		= "	SELECT prop_id, sitter_id, pet_type_id, city_cp
							FROM users
								INNER JOIN propose ON prop_userid = user_id
								INNER JOIN pet_type ON prop_pet_typeid = pet_type_id
								INNER JOIN home ON user_homeid = home_id
								INNER JOIN city ON user_cityid = city_id ";
			$strWhere	= " WHERE ";
			
			
			// Traitement du type d'animal
			$intAnimal	= $_POST['XXX']??'';
			if ($intAnimal != ''){
				$strRq 		.= $strWhere." pet_type_id = ".$intAnimal;
				$strWhere	= " AND ";
			}

			// Traitement du type de garde
			$intSitter	= $_POST['XXX']??'';
			if ($intSitter != ''){
				$strRq 		.= $strWhere." sitter_id = ".$intSitter;
				$strWhere	= " AND ";
			}

			// Traitement du code postal
			$intCP 	= $_POST['XXXX']??'';
			if ($intCP != ''){
				$strRq 		.= $strWhere." city_cp = ".$intCP;
			}

			// Classement des résultats
			$strRq 		.= " ORDER BY article_createdate DESC ";
		
							
			return $this->_db->query($strRq)->fetchAll();
		}
		
	}