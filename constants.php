<?php
class Car 
{
    private $color;
    private $manufacturer;
    const MANUFACTER_BMW="bmw";
    const MANUFACTER_TESLA="tesla";
    const MANUFACTER_COLOR="red";
    public function __construct($color,$manufacture)
    {
        $this->color=$color;
        $this->manufacturer=$manufacture;
    }
}

$car=new Car(Car::MANUFACTER_COLOR,Car::MANUFACTER_TESLA);
echo"<pre>";
var_dump($car);
echo "</pre>";
?>