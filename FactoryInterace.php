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

class GooManager{
}

class GooFactory {

	public static function getAAPI() {
		return new GooA();
	}

	public static function getBAPI() {
		return new GooB();
	}

	public static function getDefaultAPI() {
		return self::getBAPI();
	}

}

echo "Start <br>";
GooFactory::getDefaultAPI()->getUserInfo();
echo "End <br>";
?>