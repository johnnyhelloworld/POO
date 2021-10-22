<?php

//index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('white', 2, 'essence', 50);

var_dump($bike);
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->GetCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<br><br>';

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br><br>';

echo '<br><br>';

// Moving truck
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->GetCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->GetCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Le camion est chargé à ' . $truck->getLoading() . ' T. (' . $truck->isFull() . ')' . '<br>';
$truck->setLoading(50);
echo '<br> Le camion est chargé à ' . $truck->getLoading() . ' T. (' . $truck->isFull() . ')' . '<br>';