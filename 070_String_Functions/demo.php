<?php
$s = "0123456789";

//$result = substr("");
//$result = str_replace("12","-",$s);
//0-34567
$pos = strpos($s,"012",0);//php strpos//在什麼地方找什麼針在哪個點出現
if($pos!== false){//!==形態內容皆要不等
    echo "found: $pos";
}else{
    echo "not found";
}

//echo $result;
?>