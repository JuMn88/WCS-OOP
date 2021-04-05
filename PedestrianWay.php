<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::setNbLane(1);
        parent::setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $currentVehicle = parent::getCurrentVehicles();
        if ($vehicle instanceof Bycicle || $vehicle instanceof Skateboard) {
            $currentVehicle[] = $vehicle;
            parent::setCurrentVehicles($currentVehicle);
        }
    }
}