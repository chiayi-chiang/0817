<?php
    
    class CTest{
        public $Price = 100;
        private $dataBag;

        public function __set($k,$v){
            echo "__set is running . $k,$v<br> ";
            
        }
    }

?>


