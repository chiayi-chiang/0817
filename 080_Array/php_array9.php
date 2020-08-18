<?php
function cmp($a, $b)
{
    return $b - $a; 
    // if ($a == $b) {
    //     return 0;
    // }
    // return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");//呼叫叫什麼名子的字串
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>