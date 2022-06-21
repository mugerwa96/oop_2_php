<?php
class Car{
    private $color="red";
    private $year=2020;
    // magic mehtod to string to print
    public function __toString()
    {
        return "Name:$this->color <br> C olor:$this->year";
    }
}
$car= new Car;
echo $car;

?>