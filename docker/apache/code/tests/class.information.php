<?php
    class Personne{
        var $_nom;
        var $_prenom;
        var $_age;


        function __construct($nom, $prenom, $age)
        {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        }
        public function Nom($value = "")
        {
            if ($value == "")
            {
                return $this->_nom;
            }
    
        $this->_nom = $value;
        }
    
        public function Prenom($value = "")
        {
            if ($value == "")
            {
                return $this->_prenom;
            }    
    
         $this->_prenom = $value;
        }

        public function Age($value = "")
        {
            if ($value == "")
            {
                return $this->_age;
            }    
    
         $this->_age = $value;
        }
    }
    
?>