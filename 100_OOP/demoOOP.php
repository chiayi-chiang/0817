<?php

    class Animal{
        public function __construct($weightValue=0){
            $this ->weight =$weightValue;
            echo "object created.<br>";
        }
        public $weight = 1;
        public function makenoise(){//預設public
            echo 'Animal: ...<br>';
        }
        public function __destruct() {//刪除資料
            echo "Object destroyed.";
        }
    }
    $obj = new Animal();
    $obj ->makenoise();//不分大小寫
    //$obj ->weight = 10;
    $obj2 = $obj;
    $obj = null;
    //$obj2 = null;
    //echo $obj->weight,"<br>";//屬性分大小寫
    //$obj->location = "Tichang"
    //echo $obj->location."*";

?>