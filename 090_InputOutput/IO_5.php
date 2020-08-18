<?php
	$contents = file_get_contents('data.txt');//put contents get string VS _put_
	echo (str_replace("\r\n", "<br />", $contents));
?>