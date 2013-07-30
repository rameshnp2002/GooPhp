<?php
interface GooInterface {
	public function getUserInfo();
}

class GooA implements GooInterface{
	public function getUserInfo()
	{
		echo "This is from GooA->getUserInfo function<br>";
	}
}

class GooB implements GooInterface{
	public function getUserInfo()
	{
		echo "This is from GooB->getUserInfo function<br>";
	}
}

class Goo{
	private $goos;
	 
	public function setGoos( $goos )
	{
		$this->goos = $goos;
	}
	
	public function getGoos()
	{
	 	return $this->goos;
	}
	
	
	public function __construct($name){
		echo "in Construct Class inside name : $name const<br>";
		$this->setGoos(new GooB());	
	}
	
	public function getUserInfo()
	{
		echo "inside Goo->getUserInfo function<br>";
		$this->getGoos()->getUserInfo();
	}
}

echo "Start <br>";
$goo = new Goo('Ramesh');
$goo->getUserInfo();
echo "End <br>";
?>