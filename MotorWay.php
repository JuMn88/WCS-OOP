<?php

require_once 'HighWay.php';
final class MotorWay extends HighWay
{
    
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::setNbLane($nbLane);
        parent::setMaxSpeed($maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $currentVehicle = parent::getCurrentVehicles();
        if ($vehicle instanceof Car) {
            $currentVehicle[] = $vehicle;
            parent::setCurrentVehicles($currentVehicle);
        }
    }
}