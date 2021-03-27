<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'gasoline',
    ];

    private string $energy;
    private int $energyLevel;
    private int $loadingCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setLoadingCapacity($loadingCapacity);
    }

    public function filling(): string
    {
        if($this->loading < $this->loadingCapacity) {
            return 'In filling.';
        } else {
            return 'Full.';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading($loading): void
    {
        $this->loading = $loading;
    }

    public function getLoadingCapacity(): int
    {
        return $this->loadingCapacity;
    }

    public function setLoadingCapacity(int $loadingCapacity): Truck
    {
        if ($loadingCapacity > 0) {
            $this->loadingCapacity = $loadingCapacity;
        }
        return $this;
    }

}