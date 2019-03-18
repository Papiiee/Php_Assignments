<?php

class Restaurant
{
    public $name;
    public $order;
    public $bill;
    public $meal;
    public $price;
    public $plates;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setOrder($meal, $price)
    {
        $this->order = $meal . '='. $price;
        return $this;

    }

    public function calculateBill($plates, $price)
    {
        $this->bill = $plates * $price;
        return $this;

    }

    public function getDetails()
    {
        echo "Name:$this->name Order:$this->order Bill:$this->bill";
    }
}
$restaurant = new Restaurant();
$restaurant->setName('Dream Bean</br></br>')->setOrder('Chicken Skewers,Mashed Potatoes & Sauce','Ksh 1090</br></br>')->calculateBill(8, 1090)->getDetails();
?>
