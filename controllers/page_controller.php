<?php
	/**
	* Controller des pages
	* @autor Timothée KERN
	*/
	class Page_controller extends Base_controller{
		
		/**
		* Page Accueil
		*/
		public function accueil(){
			$this->_arrData['strTitle']	= "PetSitter";
			$this->_arrData['strPage']	= "index";
			$this->display("index");
		}

		/**
		* Page Contact
		*/
		public function contact(){
			$this->_arrData['strTitle']	= "PetSitter - Contact";
			$this->_arrData['strPage']	= "contact";
			$this->display("contact");
		}

		/**
		* Page Deviens PetSitter
		*/
		public function deviensPetSitter(){
			$this->_arrData['strTitle']	= "PetSitter - Devenir PetSitter";
			$this->_arrData['strPage']	= "deviensPetSitter";
			$this->display("deviensPetSitter");
		}

		/**
		* Page Fais Garder Ton Animal
		*/
		public function faisGarderTonAnimal(){	
		
			// Pour récupérer les informations dans le formulaire
		 	$intPetType	    	= $_POST['animal']??array();
		 	$intSitter		    = $_POST['garde']??array();
			$intCP 				= $_POST['cp']??'';

	 		// Liste des types d'animaux
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 
			$objPetTypeManager  = new PetTypeManager(); 
			$arrPetType 	    = $objPetTypeManager->findPetType(); 
	 		$arrPetTypeToDisplay = array();
	 		foreach($arrPetType as $arrDetPetType){
		 		$objPetType = new Pet_type;
		 		$objPetType->hydrate($arrDetPetType);
		 		$objPetType->checked = (in_array($objPetType->getId(),$intPetType))?"checked":"";
		 		$arrPetTypeToDisplay[] = $objPetType;
	 		}
		 	$this->_arrData['arrPetTypeToDisplay']	= $arrPetTypeToDisplay;
		 	$this->_arrData['intPetType']	= $intPetType;

		 	// Liste des types de garde
			require("entities/sitter_entity.php"); 
			require("models/sitter_manager.php"); 
		
			$objSitterManager  	= new SitterManager(); 
			$arrSitter	    	= $objSitterManager->findSitter();
			
			$arrSitterToDisplay = array();
			foreach($arrSitter as $arrDetSitter){
				$objSitter = new Sitter;
				$objSitter->hydrate($arrDetSitter);
				$objSitter->checked = (in_array($objSitter->getId(),$intSitter))?"checked":"";
				$arrSitterToDisplay[] = $objSitter;
			}
			$this->_arrData['arrSitterToDisplay']	= $arrSitterToDisplay;
			$this->_arrData['intSitter']	= $intSitter;

			//Pour la recherche 		
			$arrResultPetsitter = array();
			if(count($_POST) >0){
		 		require("models/search_manager.php");
		 		$objSearchManager = new SearchManager();
		 		$arrResultPetsitter = $objSearchManager->findPetSitter();
			}
			$this->_arrData['arrResultPetsitter']	= $arrResultPetsitter;

			
		 	//Affichage
			$this->_arrData['intCP']	= $intCP; 
			$this->_arrData['strTitle']	= "PetSitter - Choisis ton PetSitter";
			$this->_arrData['strPage']	= "faisGarderTonAnimal";
			$this->display("faisGarderTonAnimal");
		}
	

		/**
		* Page Galerie
		*/
		public function galerie(){
			$this->_arrData['strTitle']	= "PetSitter - Galerie photo";
			$this->_arrData['strPage']	= "galerie";
			$this->display("galerie");
		}

		
		
		/**
		* Page Mentions légales
		*/
		public function mentions(){
			$this->_arrData['strTitle']	= "Mentions légales";
			$this->_arrData['strPage']	= "mentions";
			$this->display("mentions");
		}

		/**
		* Page Pet Type Form
		*/
		public function petTypeForm (){
			$this->_arrData['strTitle']	= "#";
			$this->_arrData['strPage']	= "petTypeForm";
			$this->display("petTypeForm");
		}

		/**
		* Page Plan du site
		*/
		public function planDuSite(){
			$this->_arrData['strTitle']	= "PetSitter - Plan de site";
			$this->_arrData['strPage']	= "planDuSite";
			$this->display("planDuSite");
		}

		/**
		* Page Reste Du Formulaire
		*/
		public function resteDuFormulaire(){
			// Pour récupérer les informations dans le formulaire
			$intPetType	    	= $_POST['animal']??array();
			$intSitter		    = $_POST['garde']??array();
		   	$intCP 				= $_POST['cp']??'';

			// Liste des types d'animaux
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 
			$objPetTypeManager  = new PetTypeManager(); 
			$arrPetType 	    = $objPetTypeManager->findPetType(); 
	 		$arrPetTypeToDisplay = array();
	 		foreach($arrPetType as $arrDetPetType){
		 		$objPetType = new Pet_type;
		 		$objPetType->hydrate($arrDetPetType);
		 		$objPetType->checked = (in_array($objPetType->getId(),$intPetType))?"checked":"";
		 		$arrPetTypeToDisplay[] = $objPetType;
	 		}
		 	$this->_arrData['arrPetTypeToDisplay']	= $arrPetTypeToDisplay;
		 	$this->_arrData['intPetType']	= $intPetType;

		 	// Liste des types de garde
			require("entities/sitter_entity.php"); 
			require("models/sitter_manager.php"); 
		
			$objSitterManager  	= new SitterManager(); 
			$arrSitter	    	= $objSitterManager->findSitter();
			
			$arrSitterToDisplay = array();
			foreach($arrSitter as $arrDetSitter){
				$objSitter = new Sitter;
				$objSitter->hydrate($arrDetSitter);
				$objSitter->checked = (in_array($objSitter->getId(),$intSitter))?"checked":"";
				$arrSitterToDisplay[] = $objSitter;
			}
			$this->_arrData['arrSitterToDisplay']	= $arrSitterToDisplay;
			$this->_arrData['intSitter']	= $intSitter;


			//Affichage
			$this->_arrData['strTitle']	= "#";
			$this->_arrData['strPage']	= "resteDuFormulaire";
			$this->display("resteDuFormulaire");
		}
	}