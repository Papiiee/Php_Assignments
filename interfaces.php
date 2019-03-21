<?php

//interface 1
interface Interest
{
    public function calculateInterest();
}

//interface 2
interface Profit
{
    public function calculateProfit();

}

//parent class
class Amount
{
    public $balance;

    public function displayBalance($balance)
    {
        echo "<br><br>Dear banker,this is your balance!: $balance<br><br>";
//        return $this->balance=$balance;
    }
}

//child class inheriting from both interfaces & parent class
class Money extends Amount implements Interest, Profit

{
    public $buyingprice = 800;
    public $sellingprice = 950;
    public $principle = 1000;
    public $rate = 0.01;
    public $time = 2;

    public function calculateProfit()
    {
        echo "<br><br>The Profit is:<br><br>" . $this->sellingprice - $this->buyingprice;
    }

    public function calculateInterest()
    {
        echo "<br><br>The Interest is:<br><br>" . $this->principle * $this->rate * $this->time;
    }

//    public function displayBalance($balance)
//    {
//        echo "<br><br>Dear banker,this is your balance!<br><br>";
//        return $this->balance = $balance;
//    }

}

$money = new Money();
$money->calculateProfit();
$money->calculateInterest();
$money->displayBalance(1000);
?>


