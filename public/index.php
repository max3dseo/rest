<?php
//spl_autoload_register();


spl_autoload_register(function($class) {
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	$filename = $root . '/' . str_replace('\\', '/', $class) . '.php';
	require($filename);
	echo "filename: $filename";
	echo "<br><br>";
});










	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "DIR: <br> ".__DIR__;
	
	echo "<br>";
	echo "<br>";
	
	
	$root = $_SERVER['DOCUMENT_ROOT'];
	
	echo "DOCUMENT_ROOT:  <br> $root";

	echo "<br>";
	echo "<br>";
	
	
	$mas = new Admin\Page;
	echo $mas->getinfo(); 
	


	echo "<br>";
	echo "<br>";
	echo "<br>";
	
/*

use Admin\Page as AdminPage;
use Admin\Post as AdminPost;
use Users\Page as UserPage;


$mas1 = new AdminPage;
$mas2 = new AdminPost;
$mas3 = new UserPage;


$mas1->getinfo();
$mas2->getinfo();
$mas3->getinfo();
*/

















echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "Находимся в пространстве имен: <b style = 'font-size: 1.5em;'>".__NAMESPACE__."</b>";
























?>
