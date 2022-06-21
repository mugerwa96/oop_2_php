<?php
class Car
{
    private $color;
    private $year;
    static public $counter=0;
    public function __construct()
    {
        echo "Constructor Created<br>";
        echo Self::$counter++;   
    }

}
$my =new Car;
$my =new Car;
$my =new Car;

?>