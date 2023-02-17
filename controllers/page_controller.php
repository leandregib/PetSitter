<?php
	/**
	* Controller des pages
	* @author Timothée KERN
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
		 	$arrPetTypeSelected = $_POST['animal']??array();
		 	$arrSitterSelected	= $_POST['garde']??array();
			$intCP 				= $_POST['cp']??'';

	 		// Liste des types d'animaux
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 
			$objPetTypeManager  = new PetTypeManager(); 
			$arrPetType 	    = $objPetTypeManager->findPetType(); 
			$arrCheckedPet		= array();
			
	 		foreach($arrPetType as $arrDetPetType){
		 		$objPetType = new Pet_type;
		 		$objPetType->hydrate($arrDetPetType);
		 		if (in_array($objPetType->getId(), $arrPetTypeSelected)) {
					$arrCheckedPet[] = $objPetType->getId();
				}
		 		$arrPetTypeToDisplay[] = $objPetType;
	 		}
			$this->_arrData['arrCheckedPet']		= $arrCheckedPet;
		 	$this->_arrData['arrPetTypeToDisplay']	= $arrPetTypeToDisplay;

		 	// Liste des types de garde
			require("entities/sitter_entity.php"); 
			require("models/sitter_manager.php"); 
		
			$objSitterManager  	= new SitterManager(); 
			$arrSitter	    	= $objSitterManager->findSitter();
			$arrCheckedSitter	= array();
			
			$arrSitterToDisplay = array();
			foreach($arrSitter as $arrDetSitter){
				$objSitter = new Sitter;
				$objSitter->hydrate($arrDetSitter);
				if (in_array($objSitter->getId(), $arrSitterSelected)) {
					$arrCheckedSitter[] = $objSitter->getId();
				}
				$arrSitterToDisplay[] = $objSitter;
			}
			$this->_arrData['arrCheckedSitter']		= $arrCheckedSitter;
			$this->_arrData['arrSitterToDisplay']	= $arrSitterToDisplay;


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
			//Interdire l'accès si utilisateur non connecté
			// if (!isset($_SESSION['user'])){
			// 	header("Location:index.php?ctrl=error&action=error_403");
			// }

		 	// Liste des types d'animaux
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 

			$objPetTypeManager  = new PetTypeManager(); 
			$arrPetType 	    = $objPetTypeManager->findPetType(); 

	 		$arrPetTypeToDisplay = array();
	 		foreach($arrPetType as $arrDetPetType){
		 		$objPetType = new Pet_type;
		 		$objPetType->hydrate($arrDetPetType);
		 		$arrPetTypeToDisplay[] = $objPetType;
	 		}
		 	$this->_arrData['arrPetTypeToDisplay']	= $arrPetTypeToDisplay;

			// Liste des sexes
			require("entities/sex_entity.php"); 
			require("models/sex_manager.php"); 
		
			$objSexManager  	= new SexManager(); 
			$arrSex	    	= $objSexManager->findSex();
			
			$arrSexToDisplay = array();
			foreach($arrSex as $arrDetSex){
				$objSex = new Sex;
				$objSex->hydrate($arrDetSex);
				$arrSexToDisplay[] = $objSex;
			}
			$this->_arrData['arrSexToDisplay']	= $arrSexToDisplay;
			

			// Création de l'objet Pet
			require("entities/pet_entity.php"); 
			require("models/pet_manager.php"); 
			$objPet = new Pet;
					
			$arrError = array(); // Tableau des erreurs initialisé
			if (count($_POST) > 0) { // Si le formulaire est envoyé
				// On hydrate l'objet
				$objPet->hydrate($_POST);
				// On teste les informations
				if ($objPet->getName() == ''){ // Tests sur le nom
					$arrError[]	= "Merci de renseigner un nom pour votre animal";
				}
				
				// Si aucune erreur on l'insert en BDD
				if (count($arrError) == 0){ 
					$objPetManager = new PetManager;
					if($objPetManager->addPet($objPet)){
						header("Location:index.php");
					}else{
						$arrError[]	= "Erreur lors de l'ajout";
					}
				}
			}

			//Affichage
			$this->_arrData['objPet']		= $objPet;
			$this->_arrData['arrError']		= $arrError;
			$this->_arrData['strTitle']		= "#";
			$this->_arrData['strPage']		= "petTypeForm";
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
			$arrPetTypeSelected = $_POST['pet_typeid']??array();
			$arrSitterSelected  = $_POST['sitterid']??array();
			$intHome		    = $_POST['homeid']??'';
			
			// Liste des types d'animaux
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 
			$objPetTypeManager  = new PetTypeManager(); 
			$arrPetType 	    = $objPetTypeManager->findPetType(); 
			$arrCheckedPet		= array();
			
	 		foreach($arrPetType as $arrDetPetType){
		 		$objPetType = new Pet_type;
		 		$objPetType->hydrate($arrDetPetType);
		 		if (in_array($objPetType->getId(), $arrPetTypeSelected)) {
					$arrCheckedPet[] = $objPetType->getId();
				}
		 		$arrPetTypeToDisplay[] = $objPetType;
	 		}
			$this->_arrData['arrCheckedPet']		= $arrCheckedPet;
		 	$this->_arrData['arrPetTypeToDisplay']	= $arrPetTypeToDisplay;
		 	

		 	// Liste des types de garde
			require("entities/sitter_entity.php"); 
			require("models/sitter_manager.php"); 
		
			$objSitterManager  	= new SitterManager(); 
			$arrSitter	    	= $objSitterManager->findSitter();
			$arrCheckedSitter	= array();
			
			$arrSitterToDisplay = array();
			foreach($arrSitter as $arrDetSitter){
				$objSitter = new Sitter;
				$objSitter->hydrate($arrDetSitter);
				if (in_array($objSitter->getId(), $arrSitterSelected)) {
					$arrCheckedSitter[] = $objSitter->getId();
				}
				$arrSitterToDisplay[] = $objSitter;
			}
			$this->_arrData['arrCheckedSitter']		= $arrCheckedSitter;
			$this->_arrData['arrSitterToDisplay']	= $arrSitterToDisplay;


			// Liste des types de logements
			require("entities/home_entity.php"); 
			require("models/home_manager.php"); 
		
			$objHomeManager  	= new HomeManager(); 
			$arrHome	    	= $objHomeManager->findHome();
			$arrCheckedHome		= array();
			
			$arrHomeToDisplay 	= array();
			foreach($arrHome as $arrDetHome){
				$objHome = new Home;
				$objHome ->hydrate($arrDetHome);
				if ($intHome == $objHome->getId()) {
					$arrCheckedHome[] = $objHome->getId();
				}
				$arrHomeToDisplay[] = $objHome;
			}
			$this->_arrData['arrCheckedHome']	= $arrCheckedHome;
			$this->_arrData['arrHomeToDisplay']	= $arrHomeToDisplay;

			// Création de l'objet User
			require("entities/users_entity.php"); 
			require("models/user_manager.php");
			$objUser = new User;
			$objUserManager = new UserManager;
			// Création de l'objet Propose
			require("entities/propose_entity.php"); 
			require("models/propose_manager.php");
			$objPetsitter = new Propose;
			$objPetsitterManager = new ProposeManager;
			
			// Récupérer les informations de l'utilisateur qui est en session, dans la BDD 
			$arrUser 		= $objUserManager->getUser();
			//$arrPetsitter 	= $objPetsitterManager->getPetsitter();

			// tests sur utilisateur trouvé
			if ($arrUser === false){
				header("Location:index.php?ctrl=error&action=error_403");
			}else{
			// Hydrater l'objet avec la méthode de l'entité
				$objUser->hydrate($arrUser);
				$objPetsitter->hydrate($_POST);
			}


			//Affichage
			var_dump($objPetsitter);
			$this->_arrData['objUser']			= $objUser;
			//$this->_arrData['objPetsitter']		= $objPetsitter;
			$this->_arrData['strTitle']			= "#";
			$this->_arrData['strPage']			= "resteDuFormulaire";
			$this->display("resteDuFormulaire");
		
		}
	}