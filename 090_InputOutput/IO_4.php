<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );//讀成陣列一一顯示
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//特殊字元
}

?> 