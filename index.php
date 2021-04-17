<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$car = new Car('green', 4, 'electric');
/** Test 1: the park brake is NOT set */
$car->setHasParkBrake(false);
try{
    echo $car->forward() . PHP_EOL;
} catch(Exception $e){
    echo $e->getMessage() . PHP_EOL;
    $car->setHasParkBrake(false);
    echo $car->forward();
} finally{
    echo 'My ride rolls like a donut, man!';
}

echo '</br>';

/** Test 1: the park brake IS set */
$car->setHasParkBrake(true);
try{
    echo $car->forward() . PHP_EOL;
} catch(Exception $e){
    echo $e->getMessage() . PHP_EOL;
    $car->setHasParkBrake(false);
    echo $car->forward();
} finally{
    echo 'My ride rolls like a donut, man!';
}