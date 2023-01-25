<?php
	/**
	* Class d'une entité propose
	* @creator Jérémy Gallippi
	*/
	class User {
		/* Attributs */
		private $_id;
        private $_userid;
        private $_sitterid;
        private $_pet_typeid;
	
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
				$strMethod = "set".ucfirst(str_replace("prop_", "", $key));
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

        /*Clé ETRANGERE!
        * Getter du userid
        * @return int Id Userid
        */
        public function getUserId():int{
            return $this->_userid;
        }
        /*
        * Setter du userid
        * @param $intUserid Id Userid
        */
        public function setUserId(int $intUserid){
            $this->_userid = $intUserid;
        }

        /* Getter du petsitterid
        * @return int Id Petsitter
        */
        public function getSitterId():int{
            return $this->_sitterid;
        }
        /*
        * Setter du petsitterid
        * @param $intPetsitterid Id Petsitter
        */
        public function setSitterId(int $intSitterId){
            $this->_sitterid = $intSitterId;
        }

                /* Getter du petTypeID
        * @return int Id PetType
        */
        public function getPetTypeId():int{
            return $this->_pet_typeid;
        }
        /*
        * Setter du petTypeID
        * @param $intPetsitteridint Id PetType
        */
        public function setPetTypeId(int $intPet_TypeId){
            $this->_pet_typeid = $intPet_TypeId;
        }
    }

?>