<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";
/*******/


?>
<pre>
<?php
	foreach ($season as $key => $value){//陣列名 變數名
	echo $key ."=>". $value;
}
?>

</pre>