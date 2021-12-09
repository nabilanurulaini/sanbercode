<?php
    require_once 'animal.php';
    class Frog extends Animal
    {
       
        public $legs = 4;
        public $cold_blooded = "no";
        public function jump()
        {
           
            echo "Hop Hop";
        }
    }
?>