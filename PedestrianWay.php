<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            echo "Type de transport autorisé sur cette voie";
            $this->currentVehicles[] = $vehicle;
        }
        else{
            echo "Type de transport NON autorisé sur cette voie";
        }
    }
}