<?php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('blue');
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);
$bike->dump();

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');

$tornado->forward();

$homersSedan = new Car('pink', 5, 'gasoline');
var_dump($homersSedan);

echo $homersSedan->start();
var_dump($homersSedan);
echo $homersSedan->forward(15);
echo '<br> Vitesse de la voiture : ' . $homersSedan->getCurrentSpeed() . 'km/h' . '<br>';
echo $homersSedan->brake();
echo '<br> Vitesse de la voiture : ' . $homersSedan->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();