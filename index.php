<?php
require "Hylos.php";
require "Hero.php";

spl_autoload_register(function ($class) {
   $file = __DIR__ . '/' . $class . '.php';
   if (is_readable($file)) {
       require $file;
   }
});

use Heroes\Hero;
use Heroes\Hylos as Jaran;

$sapa = new Sapa();
echo $sapa->halo();
$hero = new Hero();
echo $hero->attack();
echo $hero->speed();
echo $hero->defend();

$hylos = new Jaran();
echo $hylos->greet();
echo $hylos->getInformasi('defend');

$balmond = new Balmond();
// echo $balmond->tanker();
$balmond->Balmond('-> Hero Moba');
echo $balmond->me();
try {
	echo $balmond->angka(2);
} catch (Exception $e) {
	echo 'Message: '. $e->getMessage();
}



