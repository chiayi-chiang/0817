<?php
$a = 20;
//$c=60;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;//a->30->20 外
	//echo "a = $a<br>";
	return $c = ($b + $a);//40+20＝c->60
}
// 請預測答案是多少?
echo myFunction(40) + $c;//60+60=120
?>