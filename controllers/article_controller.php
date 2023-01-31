<?php
	/**
	* Controller des pages des articles
	* @autor Christel Ehrhart
	*/
	class Article_controller extends Base_controller{
		
		public function blog(){
			// inclure les fichiers des classes
			require("entities/article_entity.php"); 
			require("models/article_manager.php"); 
			$objArticleManager 	= new ArticleManager(); // instancier la classe
			$this->_arrData['arrArticles']	= $objArticleManager->findArticles(); // utiliser la classe
			
			// Pour récupérer les informations dans le formulaire
			$this->_arrData['strKeywords'] 	= $_POST['keywords']??'';
			$this->_arrData['boolPeriod'] 	= $_POST['period']??0;
			$this->_arrData['strDate'] 		= $_POST['date']??'';
			$this->_arrData['strStartDate'] = $_POST['startdate']??'';
			$this->_arrData['strEndDate'] 	= $_POST['enddate']??'';
			$this->_arrData['intAuthor']	= $_POST['author']??'';
								
			// Liste des auteurs
			require("entities/user_entity.php"); 
			require("models/user_manager.php"); 
			$objUserManager = new UserManager(); 
			$this->_arrData['arrUsers']		= $objUserManager->findUsers(); 	

			// Affichage
			$this->_arrData['strTitle']	= "Articles";
			$this->_arrData['strPage']	= "blog";
			$this->display("blog");
		}
		
		public function accueil(){
			// inclure les fichiers des classes
			require("entities/article_entity.php"); 
			require("models/article_manager.php"); 
			$objManager 	= new ArticleManager(); // instancier la classe
			$this->_arrData['arrArticles'] 	= $objManager->findArticles(4); // utiliser la classe
			
			// Affichage
			$this->_arrData['strTitle']	= "Accueil";
			$this->_arrData['strPage']	= "index";
			$this->display("index");
		}
		
		public function add_article(){
			include("connect.php");
			$strTitle 	= "Ajouter un article";
			$strPage	= "add_article";
			include("views/header.php");
			
			// Récupérer les informations du formulaire
			$strArticleTitle 	= $_POST['title']??'';
			$strArticleContent 	= $_POST['content']??'';
			$arrImageInfos		= $_FILES['image']??array();
			//var_dump($_POST);
			//var_dump($_SERVER);
			$arrErrors 	= array(); // Initialisation du tableau des erreurs
			if (count($_POST) > 0){ // si formulaire envoyé
				// Tests erreurs
				if ($strArticleTitle == ''){
					$arrErrors['title'] = "Merci de renseigner un titre";
				}
				if ($strArticleContent == ''){
					$arrErrors['content'] = "Merci de renseigner un contenu";
				}
				if ($arrImageInfos['size'] == 0){
					$arrErrors['image'] = "Merci de renseigner une image";
				}
				
				if (count($arrErrors)>0){ // Affichage des erreurs, s'il y en a
					echo "<div class='error'>";
					foreach($arrErrors as $strError){
						echo "<p>".$strError."</p>";
					}
					echo "</div>";
				}else{	
					// Sauvegarde de l'image sur le serveur
					$strFileName 	= $arrImageInfos['tmp_name'];
					$objDate 		= new DateTime();
					$arrImage 		= explode(".", $arrImageInfos['name']);
					$strNewName 	= $objDate->format('YmdHis').".".$arrImage[count($arrImage)-1];/*."_".$arrImageInfos['name']*/; // Nom de l'image => A renommer par sécurité
					$strFileDest 	= $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/blog_mvc/assets/images/'.$strNewName;
					
					if (move_uploaded_file($strFileName, $strFileDest)){
						// Insertion en BDD, si pas d'erreurs
						$strRqAdd 	= "	INSERT INTO articles 
											(article_title, article_img, article_content, article_createdate, article_creator)
										VALUES 
											('".addslashes($strArticleTitle)."', '".$strNewName."', '".addslashes($strArticleContent)."', NOW(), 3);";
						$db->exec($strRqAdd);
						header("Location:index.php"); // Redirection page d'accueil
					}
				}
			}
			include("views/footer.php");
		}
				
		
		
	}