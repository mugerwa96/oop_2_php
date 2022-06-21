<?php
class Car
{
    private $color;
    private $year;
    private $defaultcolor=["red","yellow","blue"];

    public function setYear($year)
    {
        $this->year=$year;
    }
    public function getYear()
    {
        return $this->year;
    }
    

    public function setColor($color)
    {
        $color=strtolower($color);
            if(in_array($color,$this->defaultcolor))
                {
                    $this->color=$color;
                }
            else
                {
                    echo "Color not found";
                }
    }
   public function getColor()
   {
         return $this->color;
   }

   public function __construct($color="red",$year=2000)
   {
        $this->setColor($color);
        $this->setYear($year);
    
   }

}

// instance of car class
// default values
echo "Default Values<br>";
$myCar=new Car();

echo $myCar->getColor();
echo "<br>";
echo $myCar->getYear();
echo "<br>";

// object 2
echo "=======Values=========<br>";
$myCar2=new Car("YELLOW",1996);

echo $myCar2->getColor();
echo "<br>";
echo $myCar2->getYear();


?>