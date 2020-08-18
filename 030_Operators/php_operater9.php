<?php

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

$y =&$x;//當加入＆時，x和y便會互改

    $y =300;
    
    echo $x;

?>