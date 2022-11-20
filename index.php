<?php
spl_autoload_register();

use Admin\Page as AdminPage;
use Admin\Post as AdminPost;
use Users\Page as UserPage;


$mas1 = new AdminPage;
$mas2 = new AdminPost;
$mas3 = new UserPage;


$mas1->getinfo();
$mas2->getinfo();
$mas3->getinfo();

























































echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "Находимся в пространстве имен: <b style = 'font-size: 1.5em;'>".__NAMESPACE__."</b>";
























?>