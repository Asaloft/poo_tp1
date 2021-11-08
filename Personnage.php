<link href="Arme.php">
<link href="Equipement.php">
<?php
    class Personnage {
        public $nom = "";
        public $job = "";
        public $exp = 1;
        public $pdv = 0;
        public $pda = 0;
        public $pdd = 0;
        public $frc = 0;
        public $agi = 0;
        public $int = 0;
        public $cha = 0;
        public $inv = 0;
        public $slot = 0;
        private $identifiant = 0;
        
        public function __construct($nom, $job) {
            $this->nom = $nom;
            $this->job = $job;
            $this->pdv = rand(15,20);
            $this->pda = rand(5,10);
            $this->pdd = rand(5,10);
            $this->frc = rand(5,10);
            $this->agi = rand(5,10);
            $this->int = rand(5,10);
            $this->cha = rand(5,10);
            $this->inv = array();
            $this->slot = 0;
            $this->identifiant = 0;
        }
        
        public function setIdentifiant($i) {
            $this->identifiant = $i;
        }
        
        public function getIdentifiant() {
            return $this->identifiant;
        }
        
        public function affichage() {
            foreach (["nom", "job", "pdv", "pda", "pdd", "frc", "agi", "int", "cha", "inv", "slot"] as $i) {
                echo $this->$i;
            }
        }
        
        public function niveauSuivant() {
            $this->exp = $this->exp + 1;
            $this->pdv = $this->pdv + rand(1,3);
            $this->pda = $this->pda + rand(0,2);
            $this->pdd = $this->pdd + rand(0,2);
            $this->frc = $this->frc + rand(0,2);
            $this->agi = $this->agi + rand(0,2);
            $this->int = $this->int + rand(0,2);
            $this->cha = $this->cha + rand(0,2);
            $this->slot = $this-slot + rand(0,2);
            foreach (["pdv", "pda", "pdd", "frc", "agi", "int", "cha", "slot"] as $i){
                if ($this->$i > 20){
                    $this->$i = 20;                    
                }
            }
            
            public function ajouterEquipement($e){
                if ($this->slot > 0 && $this->slot < 30) {
                    if ($e instanceOf Equipement) {
                        $this->inventaire[]=$e;
                    }
                }
            }
            
        }
    }
?>