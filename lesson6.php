<?php

class Student
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo "The student's name is:<br><br>" . $this->name;
    }
}

$student = new Student();
$student->setName(Stephanie);
$student->getName();


class Car
{
    private $model;
    private $price;
    private $quality;

    public function __construct($model, $price, $quality)
    {
        $this->model = $model;
        $this->price = $price;
        $this->quality = $quality;
    }

    public function getCarModel()
    {
        return '<br><br>The car model is: ' . $this->model . '<br><br>Its price is: ' . $this->price . '<br><br>& its quality is: ' . $this->quality;
    }
}

$Car1 = new Car('Mercedes', '1 million', 'strong');
echo $Car1->getCarModel();
?>