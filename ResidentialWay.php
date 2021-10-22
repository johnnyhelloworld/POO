<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Vehicle){
            echo "Type de transport autorisé sur cette voie" . "<br>";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Type de transport NON autorisé sur cette voie" . "<br>";
        }
    }
}