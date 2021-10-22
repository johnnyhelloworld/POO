<?php

//index.php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('red', 1);
$car = new Car('black Tesla', 4, 'electricity');

//var_dump($bike);
//var_dump($car);

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
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';