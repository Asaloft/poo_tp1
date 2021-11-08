<link rel="Equipement.php">
<?php
    class Arme extends Equipement {
        public $job = "";
        public $pda = 1;
        
        public function set($job, $pda) {
            $this->job = $job;
            $this->pda = $pda;
        }
    }
?>