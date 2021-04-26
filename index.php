<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'SkateBoard.php';


$car = new Car('green', 4, 'electric');
$bike = new Bicycle('blue', 1);
$skateboard = new SkateBoard('black', 1);
/** Test 1: testing the car's lights */
echo $car->switchOn();
echo $car->switchOff();

echo '</br>';

/** Test 2: testing the bike's lights */
echo $bike->switchOn();
echo $bike->switchOff();

$bike->forward();
echo $bike->switchOn();
echo $bike->switchOff();

echo '</br>';

/** Test 3: testing the skateboard's lights */
//echo $skateboard->switchOn();
//echo $skateboard->switchOff();