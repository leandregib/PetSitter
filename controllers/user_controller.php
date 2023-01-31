<?php
	/**
	* Controller des utilisateurs
	* @autor Christel Ehrhart
	*/
	class User_controller extends Base_controller{
		
		/**
		* Page Se connecter
		*/
		public function login(){
			// Vérifier l'utilisateur / mdp en base de données (Attention aux infos vides)
			// Stocker les informations utiles de l'utilisateur en session
			// Exemple : $_SESSION['id'] = 15; ou $_SESSION['user']['id'] = 15;

			
			//Affichage
			$this->_arrData['strTitle']	= "Se connecter";
			$this->_arrData['strPage']	= "login";
			$this->display("login");
		}
		/**
		* Page Créer un compte
		*/
		public function create_account(){

			//Affichage
			$this->_arrData['strTitle']	= "Créer un compte";
			$this->_arrData['strPage']	= "create_account";
			$this->display("create_account");
		}
		/**
		* Page Se déconnecter
		*/
		public function logout(){
			echo "je suis dans la page logout";
		}
	}