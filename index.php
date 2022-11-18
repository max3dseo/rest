<?php 










interface iUser
{
	
	public function getName($names);
	public function getAge($ages);
	
}


class User implements iUser
{
	
	public $name;
	public $age;
	
	public function getName($name)
	{
		return $this->name = $name;
		
	}
	
	public function getAge($age)
	{
		return $this->age = $age;
	}
	
	
	
	
}

$mas = new User;

$name = $mas->getName("Fish");

$age = $mas->getName(18);

echo $name;
echo "<br>";
echo $age;

























?>
