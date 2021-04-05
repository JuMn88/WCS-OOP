<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::setNbLane(2);
        parent::setMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $currentVehicle = parent::getCurrentVehicles();
        if ($vehicle instanceof Vehicle) {
            $currentVehicle[] = $vehicle;
            parent::setCurrentVehicles($currentVehicle);
        }
    }
}