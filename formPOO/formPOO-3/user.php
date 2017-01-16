<?php 


class Form {

	private $_firstName = "";
	private $_lastName = "";

	public function getFirstName(){

		$this->_firstName = $_GET['firstName'];
		return $this->_firstName;

	}

	public function getLastName(){

		$this->_lastName = $_GET['lastName'];
		return $this->_lastName;

	}

}

$info = new Form();

echo $info->getFirstName();
echo $info->getLastName();

?>