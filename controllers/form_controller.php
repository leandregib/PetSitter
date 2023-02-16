<?php
	/**
	* Controller des pages des formulaires
	* @author Timothée KERN
	*/
	class Form_controller extends Base_controller{
		
		public function petTypeForm(){
			include("connect.php");
			$strTitle 	= "#";
			$strPage	= "petTypeForm";
			include("views/header.php");
			
			// Récupérer les informations du formulaire
			$strPetName 		= $_POST['petName']??'';
			$strPetBirth		= $_POST['petBirth']??'';
			$strSitterType		= $_POST['sitterType']??'';
			$strPetSex			= $_POST['petSex']??'';
			//var_dump($_POST);
			//var_dump($_SERVER);
			$arrErrors 	= array(); // Initialisation du tableau des erreurs
			if (count($_POST) > 0){ // si formulaire envoyé
				// Tests erreurs
				if ($strPetName == ''){
					$arrErrors['name'] = "Merci de renseigner un nom pour votre animal";
				}
				if ($strPetBirth == ''){
					$arrErrors['birth'] = "Merci de renseigner une date de naissance";
				}
				if ($strSitterType == ''){
					$arrErrors['type'] = "Merci de renseigner un type d'animal";
				}
				if ($strPetSex == ''){
					$arrErrors['sex'] = "Merci de renseigner le sexe de votre animal";
				}
				
				if (count($arrErrors)>0){ // Affichage des erreurs, s'il y en a
					echo "<div class='error'>";
					foreach($arrErrors as $strError){
						echo "<p>".$strError."</p>";
					}
					echo "</div>";
				}else{	
					// Créer un objet vide avec l'entité
					// Hydrater l'objet avec le $_POST
					// Appeler le user_manager et ajouter la méthode d'ajout en passant l'objet en paramètre
						
					// Insertion en BDD, si pas d'erreurs => dans la méthode du user_manager
						$strRqAdd 	= "	INSERT INTO articles 
											(article_title, article_img, article_content, article_createdate, article_creator)
										VALUES 
											('".addslashes($strArticleTitle)."', '".$strNewName."', '".addslashes($strArticleContent)."', NOW(), 3);";
						$db->exec($strRqAdd);
						header("Location:index.php"); // Redirection page d'accueil
					}
				
			}
			include("views/footer.php");
		}
				
		
		
	}