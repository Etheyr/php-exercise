<?php

class StrUtils {

	private $_str = "";

	function __construct($ugly) {

		return $this->_str = $ugly;

	}

	function bold() {

		$this->_str = "<b>$this->_str</b>" ;
		return $this->_str;

	}

	function italic() {

		$this->_str = "<i>$this->_str</i>" ;
		return $this->_str;

	}

	function underline() {

		$this->_str = "<u>$this->_str</u>" ;
		return $this->_str;

	}

	function capitalize() {

 		return strtoupper($this->_str);	
		
	}

	function uglify() {

		$this->bold();
		$this->italic();
		$this->underline();

	}

	function ToString(){
		return $this->_str;

	}

}

$myStr = new StrUtils("Vel'Koz");

$myStr->uglify();
echo $myStr->ToString();
?>