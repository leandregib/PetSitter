<?php
	require_once("connect.php");//Classe mère des managers
	/**
	* Class manager de pet_type
	* @creator Timothée KERN
	*/
	class PictureManager extends Manager{
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
			parent::__construct();
		}
		
		/**
		* Methode de récupération des images
		* @return array Liste des images
		*/
		public function findPicture(){
			$strRqPicture = "SELECT pic_id, pic_name, pic_date, pic_description, pic_userid FROM picture ;";
							
			return $this->_db->query($strRqPicture)->fetchAll();
		}

		/**
		* Methode d'ajout d'image dans la BDD
		* @return array Objet image
		*/
		public function addPicture($objPicture){
           
			//Préparer la requête
			$strRqAdd 	= "	INSERT INTO picture
								(pic_name, pic_date, pic_description, pic_userid)
							VALUES (:name, :date, :description, :userid)";			
			$prep		= $this->_db->prepare($strRqAdd);

			//Associer des valeurs aux place holders
			$prep->bindValue(':name', $objUser->getName(), PDO::PARAM_STR);
			$prep->bindValue(':date', $objUser->getDate(), PDO::PARAM_STR);
			$prep->bindValue(':description', $objUser->getDescription(), PDO::PARAM_STR);
			$prep->bindValue(':userid', $objUser->getUserid(), PDO::PARAM_INT);
		
			return $prep->execute();				
		
		}
		
	}