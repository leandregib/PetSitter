<?php
	/**
	* Class d'une entité pet
	* @creator Timothée KERN 
	*/
	class Pet {
		/* Attributs */
		private $_id;
		private $_name;
		private $_date;
		private $_userid;
		private $_typeid;
		private $_sexid;
		
		/**
		* Constructeur de la classe
		*/
		public function __construct(){
		}
		
		/**
		* Remplissage de l'objet avec les données du tableau
		*/
		public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("pet_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value);
				}
			}
		}
		
		/* Getters et Setters */
		
		/**
		* Getter de l'id
		* @return int Identifiant
		*/
		public function getId():int{
			return $this->_id;
		}
		/**
		* Setter de l'id
		* @param $intId Identifiant
		*/
		public function setId(int $intId){
			$this->_id = $intId;
		}
		//___________________________________________________________________________
		/**
		* Getter du nom
		* @return string Nom
		*/
		public function getName():string{
			return $this->_name;
		}
		/**
		* Setter du nom
		* @param $strTitle Nom
		*/
		public function setName(string $strName){
			$this->_name= $strName;
		}
		//___________________________________________________________________________
		/**
		* Getter de la date 
		* @return string Date au format d/m/Y
		*/
		public function getDate():string{
			$date = new DateTime($this->_date);
			return $date->format('d/m/Y');
		}
		/**
		* Setter de la date
		* @param $date Date 
		*/
		public function setDate(string $date){
			$this->_date = $date;
		}
		//___________________________________________________________________________
		/**
		* Getter du userid
		* @return int Id Userid
		*/
		public function getUserid():int{
			return $this->_userid;
		}
		/**
		* Setter du userid
		* @param $intUserid Id Userid
		*/
		public function setUserid(int $intUserid){
			$this->_userid = $intUserid;
		}
		//___________________________________________________________________________
		/**
		* Getter du typeid
		* @return int Id Type
		*/
		public function getTypeid():int{
			return $this->_typeid;
		}
		/**
		* Setter du typeid
		* @param $intTypeid Id Type
		*/
		public function setTypeid(int $intTypeid){
			$this->_typeid = $intTypeid;
		}	
		//___________________________________________________________________________
		/**
		* Getter du sexid
		* @return int Id Sex
		*/
		public function getSexid():int{
			return $this->_sexid;
		}
		/**
		* Setter du sexid
		* @param $intSexid Id Sex
		*/
		public function setSexid(int $intSexid){
			$this->_sexid = $intSexid;
		}
				
	}