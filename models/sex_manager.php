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

		/**
		* Methode de récupération du sexe de l'animal de l'utilisateur
		* @return array récupère le sexe de l'animal de l'utilisateur
		*/
		public function getSex(){
			$intId 			= $_GET['id']??$_SESSION['user']['id'];
			$strRqSex	= "SELECT sex_type								  
							FROM sex
								INNER JOIN pet ON pet_sexid = sex_id
								INNER JOIN users ON pet_userid = user_id
							WHERE user_id = '".$intId."'";
							
			$arrSex 	= $this->_db->query($strRqSex)->fetch();
			
			return $arrSex;
		}
		
	}