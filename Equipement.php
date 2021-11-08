<link href="Arme.php">
<link href="Personnage.php">
<?php
    class Equipement {
        public $nom = "";
        public $slot = 0;
        protected $identifiant = 0;
        
        public __construct($nom, $slot) {
            $this->nom = $nom;
            $this->slot = $slot;
            $this->identifiant = 0;
        }
        
        public function setIdentifiant($i) {
            $this->identifiant = $i;
        }
        
        public function getIdentifiant() {
            return $this->identifiant;
        }
    }
?>