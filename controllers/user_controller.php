<?php
	/**
	* Controller des utilisateurs
	* @autor Jérémy Gallippi
	*/
	class User_controller extends Base_controller{
		

		/**
		* Constructeur de la classe
		*/ 
		public function __construct(){
			require("models/user_manager.php"); 
			require("entities/users_entity.php"); 
		}

		/**
		* Page Se connecter
		*/
		public function login(){
			// Vérifier l'utilisateur / mdp en base de données (Attention aux infos vides)
			// Stocker les informations utiles de l'utilisateur en session
			// Exemple : $_SESSION['id'] = 15; ou $_SESSION['user']['id'] = 15;
			if (count($_POST) > 0){
				$strMail 	= $_POST['mail'];
				$strPassword 	= $_POST['password'];
				
				
				$objUserManager = new UserManager();
				// Vérifier l'utilisateur / mdp en base de données
				$arrUser = $objUserManager->verifUser($strMail, $strPassword);
				 //var_dump($arrUser);
				if ($arrUser === false){
					$this->_arrData['strError'] = "Erreur de connexion";
				}else{
					// Stocker les informations utiles de l'utilisateur en session
					$_SESSION['user']	= $arrUser;var_dump($arrUser);
				}
				
			}
			
			/*Affichage
			$this->_arrData['strTitle']	= "Se connecter";
			$this->_arrData['strPage']	= "login";
			$this->display("login");*/
		}

		/**
		* Page Inscription
		*/
		public function inscription(){
				// Pour récupérer les informations dans le formulaire
				/*$intCity				= $_POST['city']??'';*/

			$intCityId				= $_POST['cityid']??'';	
			/*$strName				= $_POST['name']??'';	
			$strFirstName			= $_POST['firstname']??'';
			$dateBirthday			= $_POST['birthday']??'';
			$strMail				= $_POST['mail']??'';
			$strPassword			= $_POST['password']??'';
				
			$strAdress				= $_POST['adress']??'';
			$strPhone				= $_POST['phone']??'';
			$textDescription		= $_POST['description']??'';*/

			$strConfirmPassword		= $_POST['confirmpassword']??'';

			$arrError = array(); // Tableau des erreurs initialisé
			$objUser = new User; //

			// Liste des villes
			require("entities/city_entity.php"); 
			require("models/city_manager.php"); 
			$objCityManager  = new CityManager(); 
			$arrCity 	    = $objCityManager->findCity(); 
			$arrCityToDisplay = array();
			foreach($arrCity as $arrDetCity){
				$objCity = new City;
				$objCity->hydrate($arrDetCity);
				$objCity->selected = ($intCityId == $objCity->getId())?"selected":"";
				$arrCityToDisplay[] = $objCity;
			}
			
				
			if (count($_POST) > 0) { // Si le formulaire est envoyé
				// On teste les informations
				$objUser->hydrate($_POST);

				if ($objUser->getName() == ''){ // Tests sur le nom
				$arrError[]	= "Merci de renseigner un nom";
				}
				if ($objUser->getFirstName() == ''){ // Tests sur le prénom
					$arrError[]	= "Merci de renseigner un prénom";
				}
				if ($objUser->getMail() == ''){ // Tests sur le mail
					$arrError[]	= "Merci de renseigner une adresse mail";
				}
				if ($objUser->getPassword() == ''){ // Tests sur le mot de passe
					$arrError[]	= "Merci de renseigner un mot de passe";
				}
				if (!password_verify($_POST['confirmpassword'], $objUser->getPassword())){ // Tests sur la confirmation du mot de passe
					$arrError[]	= "Le mot de passe et sa confirmation ne sont pas identiques";
				}
				// Si aucune erreur, on créer l'objet User et on l'insert en BDD
				if (count($arrError) == 0){ 
											
					//var_dump($objUser);
					
					
					$objUserManager = new UserManager;
					if($objUserManager->addUsers($objUser)){
						header("Location:index.php");
					}else{
						$arrError[]	= "Erreur lors de l'ajout";
					}
				}				
		
				
			}
				

			$this->_arrData['intCity']			= $intCityId;
			$this->_arrData['arrCityToDisplay']	= $arrCityToDisplay;
		
			/*$this->_arrData['strName']			= $strName; // On passe la variable strName dans le template
			$this->_arrData['strFirstname']		= $strFirstName; 
			$this->_arrData['strMail']			= $strMail; */
			$this->_arrData['arrError']			= $arrError;
			$this->_arrData['strTitle']			= "PetSitter - Inscription";
			$this->_arrData['strPage']			= "inscription";
			$this->display("inscription");
		}
		
		/**
		* Page Créer un compte
		*/
		/*public function create_account(){

			//Affichage
			$this->_arrData['strTitle']	= "Créer un compte";
			$this->_arrData['strPage']	= "create_account";
			$this->display("create_account");
		}*/
		/**
		* Page Se déconnecter
		*/
		public function logout(){
			session_destroy();
			header("Location:index.php");
		}
	}