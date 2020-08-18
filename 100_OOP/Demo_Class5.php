<?php
$obj = new CAnimal ();
$obj->makeNoise ();
echo "<br>";

$obj->weight = 10;
$obj->weight = -5;
echo $obj->weight;


class CAnimal {
	public $weight;
	private $_weight = 0;
	
	function __construct() {
		foreach ( get_class_vars ( "CAnimal" ) as $varName => $varValue ) {
			if (substr ( $varName, 0, 1 ) != "_")
				unset ( $this->$varName );//清掉記憶體內容，isset可以確定記憶體是否存在
		}
		
		$this->weight = 0;
	}
	
	public function __get($varName) {
		if (method_exists ( $this, $MethodName = 'get' . $varName ))
			return $this->$MethodName ();
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
	}
	
	public function __set($varName, $value) {
		if (method_exists ( $this, $MethodName = 'set' . $varName ))
			return $this->$MethodName ( $value );
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
	}
	
	public function makeNoise() {
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value) {//檢查資料
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight() {//傳回公開資料
		return $this->_weight;
	}
}

?>
