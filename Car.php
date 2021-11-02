<?php

// Car.php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
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
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function start()
    {
        if ($this->hasParkBrake == true){
            throw new Exception("le frein à main est actif");
        }
    }
    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }
}