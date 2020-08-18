<?php
  $x = getdate();
  echo gettype($x), "<br>";//array
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";//2020-08-17 03:11:39
  echo gettype($x), "<br>";//string
  
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";//2020-08-17 03:11:39
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";//1597633899
  echo gettype($x), "<br>";//integer
 
  






?>