<?php
	/**
	* Controller des Propositions
	* @author Jérémy Gallippi
	*/
	class Propose_controller extends Base_controller{

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
			//picture (utilisé par le form "ajoutez votre image")
			require("entities/picture_entity.php"); 
			require("models/picture_manager.php"); 
		}
		

        public function list_sitter(){
            
                if (	
                    // utilisateur non connecté
                    (!isset($_SESSION['user'])) 
                ||  
                    // utilisateur non admin qui veut changer un autre compte
                    (isset($_GET['id'])!= $_SESSION['user']['id'] && $_SESSION['user']['role'] != 1 && $_SESSION['user']['role'] != 3) 
                       ){
                        header("Location:index.php?ctrl=error&action=error_403");
                }
                
                // Récupération des utilisateurs
                $objProposeManager = new ProposeManager;
                $arrPropose = $objProposeManager->findPetsitter();
                
                // Liste des utilisateurs en mode objet
                $arrProposeToDisplay = array();
                foreach($arrPropose as $arrDetPropose){
                    $objPropose = new Propose;
                    $objPropose->hydrate($arrDetPropose);
                    $arrProposeToDisplay[] = $objPropose;
                    
                }
                // Affichage
                $this->_arrData['strTitle']					    = "Liste des Sitter";
                $this->_arrData['strPage']					    = "list_sitter";
                $this->_arrData['arrProposeToDisplay']			= $arrProposeToDisplay;
                $this->display("list_sitter");
            }

        
    }