<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);//字串排法
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);//自然排法
	var_dump($testArray);
?>
