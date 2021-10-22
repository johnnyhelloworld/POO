<?php

// Truck.php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;
    private int $loading = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
        $this->energy = $energy;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function getLoading()
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
        $this->loading = $loading;
    }

    public function isFull(): string
    {
        if($this->loading == $this->capacity)
        {
            return "full";
        }
        else{
            return "in filling";
        }
    }
}