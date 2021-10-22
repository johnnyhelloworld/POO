<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car){
            echo "Type de transport autorisé sur cette voie" . "<br>";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Type de transport NON autorisé sur cette voie" . "<br>";
        }
    }
}