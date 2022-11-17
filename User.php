<?php



class User
{

	public $name;
	public $age;

	public function __construct($str)
	{
		echo "Реальный конструктор!!!"." $str";
		echo "<br>";
	}

	public function getname()
	{
		return $this->name;
	}
}













?>
