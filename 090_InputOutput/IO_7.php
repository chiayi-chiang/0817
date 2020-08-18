<?php
header("content-type: text/html; charset=utf-8");//
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))
{
	$line = fgets($f);//會跟隨換行符號
	$sData .= Trim($line) . "<br>";
	//ednoffile
	//lestoffile
	//fput,fread,fclose,filesize
}
fclose($f);
echo $sData;

?>
