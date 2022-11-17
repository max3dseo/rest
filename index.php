<?php 










class User
{
	
	public $name;
	public $age;
	
	public function getname()
	{
		echo $this->name;
		echo "<br>";
		echo $this->age;
	}
}


$mas = new User;

$mas->name = "Fish";
$mas->age = 18;

$mas->getname();
































?>
