<?php
	/**
	* Controller des pages des formulaires
	* @author Timothée KERN
	*/
	class Form_controller extends Base_controller{
		/**
		* Constructeur de la classe
		*/ 
		public function __construct(){
			//user (utilisé par le form "fais parti de nos PetSitter")
			require("models/user_manager.php"); 
			require("entities/users_entity.php");
			//pet_type (utilisé par les forms "fais parti de nos PetSitter" & "ajoute ton animal" & "fais garder ton animal")
			require("entities/pet_type_entity.php"); 
			require("models/pet_type_manager.php"); 
			//sitter (utilisé par le form "fais parti de nos PetSitter"  & "fais garder ton animal")
			require("entities/sitter_entity.php"); 
			require("models/sitter_manager.php"); 
			//home (utilisé par le form "fais parti de nos PetSitter")
			require("entities/home_entity.php"); 
			require("models/home_manager.php"); 
			//propose (utilisé par le form "fais parti de nos PetSitter")
			require("entities/propose_entity.php"); 
			require("models/propose_manager.php");
			//sex (utilisé par le form "ajoute ton animal")
			require("entities/sex_entity.php"); 
			require("models/sex_manager.php"); 
			//pet (utilisé par le form "ajoute ton animal")
			require("entities/pet_entity.php"); 
			require("models/pet_manager.php"); 
		}
		
		/**
		* Page Reste Du Formulaire
		*/
		public function formNouvPetSitter(){
			if (	
				// utilisateur non connecté
				(!isset($_SESSION['user'])) 
			||  
				// utilisateur non admin qui veut changer un autre compte
				(isset($_GET['id']) && $_SESSION['user']['role'] != 1) 
		   ){
			header("Location:index.php?ctrl=error&action=error_403");
			}

			// Pour récupérer les informations dans le formulaire
			$arrPetTypeSelected = $_POST['pet_typeid']??array();
			$arrSitterSelected  = $_POST['sitterid']??array();
			$intHome		    = $_POST['homeid']??'';
			$intId 				= $_SESSION['user']['id'];
			$boolPersonalData 	=  $_POST['personal_data']??'';

			// Création de l'objet User
			$objUser = new User;
			$objUserManager = new UserManager;

			// Création de l'objet Propose
			$objPetsitter = new Propose;
			$objPetsitterManager = new ProposeManager;

			//Vérifie que le petsitter n'existe pas déjà
			$boolOK = $objPetsitterManager->getPetsitter($intId);
			if ($boolOK==true) {
				header("Location:index.php?ctrl=error&action=error_error_form_already_completed");
			}
			
			// Liste des types d'animaux
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

			$arrError = array(); // Tableau des erreurs initialisé
			// Si formulaire envoyé
			if (count($_POST) > 0) {
				// On teste les informations
				if ($arrPetTypeSelected != array() && $arrSitterSelected == array()){ // 1er test sur la combinaison des types de gardes aux types d'animaux
					$arrError[]	= "Merci de renseigner au moins un type de garde";
				}
				if ($arrPetTypeSelected == array() && $arrSitterSelected != array()){ // 2nd test sur la combinaison des types de gardes aux types d'animaux
					$arrError[]	= "Merci de renseigner au moins un type d'animal";
				}
				if ($arrPetTypeSelected == array() && $arrSitterSelected == array()){ // 2nd test sur la combinaison des types de gardes aux types d'animaux
					$arrError[]	= "Merci de renseigner au moins un type d'animal et un type de garde correspondante";
				}
				if ($boolPersonalData == ''){ // Case d'autorisation de traitement des données personnelles
					$arrError[]	= "Merci d'accepter le traitement des données transmises";
				}
		
				
				// Si aucune erreur on l'insert en BDD
				if (count($arrError) == 0){ 
					if ($intHome != '') {
						$objUser->setHomeId($intHome);
						$objUserManager->editHome($objUser, $intId); 
					}
					if ($arrPetTypeSelected != array() && $arrSitterSelected != array()) {
						foreach($arrPetTypeSelected as $intPetTypeSelected){
							foreach($arrSitterSelected as $intSitterSelected){
								$arrSelected = array('sitterid' => $intSitterSelected, 'pettypeid' => $intPetTypeSelected);

								$objPropose = new Propose;
								$objPropose->hydrate($arrSelected);
								$objPetsitterManager->addPetsitter($objPropose, $intId);
							}
						}
					}
					header("Location:index.php"); // Redirection page d'accueil
				}			

				
			}


			//Affichage
			$this->_arrData['objUser']			= $objUser;
			$this->_arrData['arrError']			= $arrError;
			$this->_arrData['strTitle']			= "Fais parti de nos PetSitter";
			$this->_arrData['strPage']			= "formNouvPetSitter";
			$this->display("formNouvPetSitter");
		
		}

		//_________________________________________________________________________________________________________

		/**
		* Page Pet Type Form
		*/
		public function formNouvAnimal (){
			if (	
				// utilisateur non connecté
				(!isset($_SESSION['user'])) 
			||  
				// utilisateur non admin qui veut changer un autre compte
				(isset($_GET['id']) && $_SESSION['user']['role'] != 1) 
		   ){
			header("Location:index.php?ctrl=error&action=error_403");
			}

		 	// Liste des types d'animaux
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
			$objSexManager  	= new SexManager(); 
			$arrSex	    	= $objSexManager->findSex();
			
			$arrSexToDisplay = array();
			foreach($arrSex as $arrDetSex){
				$objSex = new Sex;
				$objSex->hydrate($arrDetSex);
				$arrSexToDisplay[] = $objSex;
			}
			$this->_arrData['arrSexToDisplay']	= $arrSexToDisplay;
			
			// Pour récupérer les informations dans le formulaire (case RGPD à cocher)
			$boolPersonalData 	=  $_POST['personal_data']??'';

			// Création de l'objet Pet
			$objPet = new Pet;
			// Création de l'objet PetManager
			$objPetManager = new PetManager;
					
			$arrError = array(); // Tableau des erreurs initialisé
			if (count($_POST) > 0) { // Si le formulaire est envoyé
				// On hydrate l'objet
				$objPet->hydrate($_POST);
				// On teste les informations
				if ($objPet->getName() == ''){ // Tests sur le nom
					$arrError[]	= "Merci de renseigner un nom pour votre animal";
				}else if($objPetManager->pet_exist($objPet)){ // test si déjà existant
				$arrError[]	= "Cet animal a déjà été enregistré";
				}
				if ($boolPersonalData == ''){ // Case d'autorisation de traitement des données personnelles
					$arrError[]	= "Merci d'accepter le traitement des données transmises";
				}
				
				// Si aucune erreur on l'insert en BDD
				if (count($arrError) == 0){ 
					if($objPetManager->addPet($objPet)){
						header("Location:index.php"); // Redirection page d'accueil;
					}else{
						$arrError[]	= "Erreur lors de l'ajout";
					}
				}
			}

			//Affichage
			$this->_arrData['objPet']		= $objPet;
			$this->_arrData['arrError']		= $arrError;
			$this->_arrData['strTitle']		= "Ajoute ton animal";
			$this->_arrData['strPage']		= "formNouvAnimal";
			$this->display("formNouvAnimal");
		}

		//_________________________________________________________________________________________________________

		
		/**
		* Page Fais Garder Ton Animal
		*/
		public function faisGarderTonAnimal(){	
		
			// Pour récupérer les informations dans le formulaire
		 	$arrPetTypeSelected = $_POST['animal']??array();
		 	$arrSitterSelected	= $_POST['garde']??array();
			$intCP 				= $_POST['cp']??'';

	 		// Liste des types d'animaux
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
				
		
		
	}