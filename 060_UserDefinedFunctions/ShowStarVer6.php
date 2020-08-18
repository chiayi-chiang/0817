<?php

function ShowStar() {
	$args = func_get_args();
	
	if (!isset($args[0]))
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);
}

function ShowStar_all($iCount, $sWhat = "*")
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";//空字串
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;//將星星串接
	}
	echo $result;//將星星填入
}

// ShowStar(2, "^");
// ShowStar(null, "$");
ShowStar();
?>