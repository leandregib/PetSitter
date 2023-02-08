<?php
	/**
	* Controller des utilisateurs
	* @autor Jérémy Gallippi
	*/
	class User_controller extends Base_controller{
		
		/**
		* Page Se connecter
		*/
		public function login(){
			// Vérifier l'utilisateur / mdp en base de données (Attention aux infos vides)
			// Stocker les informations utiles de l'utilisateur en session
			// Exemple : $_SESSION['id'] = 15; ou $_SESSION['user']['id'] = 15;
			if (count($_POST) > 0){
				$strMail 	= $_POST['mail']??'';
				$strPwd 	= $_POST['password']??'';
				
				require("models/user_manager.php"); 
				$objUserManager = new UserManager;
				// Vérifier l'utilisateur / mdp en base de données
				$arrUser = $objUserManager->verifUser($strMail, $strPassword);
				// var_dump($arrUser);
				if ($arrUser === false){
					$this->_arrData['strError'] = "Erreur de connexion";
				}else{
					// Stocker les informations utiles de l'utilisateur en session
					$_SESSION['user']	= $arrUser;
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
			$strName				= $_POST['name']??'';	
			$strFirstName			= $_POST['firstname']??'';
			$dateBirthday			= $_POST['birthday']??'';
			$strMail				= $_POST['mail']??'';
			$strPassword			= $_POST['password']??'';
			$strConfirmPassword		= $_POST['confirmpassword']??'';	
			$strAdress				= $_POST['adress']??'';
			$strPhone				= $_POST['phone']??'';
			$textDescription		= $_POST['description']??'';
			
			$arrError = array(); // Tableau des erreurs initialisé

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
			
			if(count($_POST)>0){	
			
				
				
				if (count($_POST) > 0) { // Si le formulaire est envoyé
					// On teste les informations
					if ($strName == ''){ // Tests sur le nom
						$arrError[]	= "Merci de renseigner un nom";
					}
					if ($strFirstName == ''){ // Tests sur le prénom
						$arrError[]	= "Merci de renseigner un prénom";
					}
					if ($strMail == ''){ // Tests sur le mail
						$arrError[]	= "Merci de renseigner une adresse mail";
					}
					if ($strPassword == ''){ // Tests sur le mot de passe
						$arrError[]	= "Merci de renseigner un mot de passe";
					}
					if ($strPassword != $strConfirmPassword){ // Tests sur la confirmation du mot de passe
						$arrError[]	= "Le mot de passe et sa confirmation ne sont pas identiques";
					}
					// Si aucune erreur, on créer l'objet User et on l'insert en BDD
					if (count($arrError) == 0){ 
						require("entities/users_entity.php"); 
						$objUser = new User;
						$objUser->hydrate($_POST);
						//var_dump($objUser);
						
						require("models/user_manager.php"); 
						$objUserManager = new UserManager;
						if($objUserManager->addUsers($objUser)){
							header("Location:index.php");
						}else{
							$arrError[]	= "Erreur lors de l'ajout";
						}
					}				
			
					
				}
				

			}
			$this->_arrData['arrCityToDisplay']	= $arrCityToDisplay;
			$this->_arrData['intCity']	= $intCityId;
			$this->_arrData['strName']		= $strName; // On passe la variable strName dans le template
			$this->_arrData['strFirstname']	= $strFirstName; 
			$this->_arrData['strMail']		= $strMail; 
			$this->_arrData['arrError']		= $arrError;
			$this->_arrData['strTitle']	= "PetSitter - Inscription";
			$this->_arrData['strPage']	= "inscription";
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
			echo "je suis dans la page logout";
		}
	}