<?php

//index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('white', 2, 'essence', 50);

$carHighWay = new Car('green', 4, 'electric');
$bikeHighWay = new Bicycle('blue', 1);
$skate = new Skateboard('Black', 0);

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($carHighWay);
var_dump($motorWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($bikeHighWay);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($skate);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($carHighWay);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

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

$car->setParkBrake(true);
try{
    $car->start();
} catch(Exception $e){
    echo "Exception received : ". $e->getMessage() . "<br>";
} finally {
    echo "Ma voiture roule comme un donut";
}