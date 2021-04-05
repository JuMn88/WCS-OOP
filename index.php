<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$bicycle = new Bicycle('blue', 1);
/*echo $bicycle->forward();
var_dump($bicycle);*/

$car = new Car('green', 4, 'electric');
$car2 = new Car('red', 4, 'fuel');
/*echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);*/

$truck = new Truck('red', 2, 'gasoline', 200);
/*echo $truck->forward();
var_dump($truck);
echo $truck->filling();
$truck->setLoading(200);
echo $truck->filling();
var_dump($truck);*/

$motorWay = new MotorWay(4, 130);
$residentialWay = new ResidentialWay(2, 50);
$pedestrianWay = new PedestrianWay(1, 10);

var_dump($motorWay);
var_dump($residentialWay);
var_dump($pedestrianWay);

$motorWay->addVehicle($car);
$motorWay->addVehicle($car2);
$motorWay->addVehicle($truck);
$motorWay->addVehicle($bicycle);
var_dump($motorWay);

$residentialWay->addVehicle($car);
$residentialWay->addVehicle($car2);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($bicycle);
var_dump($residentialWay);

$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($car2);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($bicycle);
var_dump($pedestrianWay);