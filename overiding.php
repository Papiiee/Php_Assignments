<?php
//parent class
class Fruit
{
    protected $name='Apples';
    protected $type='Pomes';
    protected $color='Red';
    public $price;

    public function setName ($name)
    {
        $this->name=$name;
    }
    public function getName()
    {
    return $this;
    }
    public function setType ($type)
    {
        $this->type=$type;
    }
    public function getType()
    {
        return $this;
    }

    public function setColor ($color)
    {
        $this->name=$color;
    }
    public function getColor()
    {
        return $this;
    }

    public function price()
    {
        echo "<br><br><br>Fruits are tasty!";
    }
}
//child class
class Apples extends Fruit
{
    //use of final keyword
    final public function price()
    {
        echo "<br><br><br>Especially apples!";
    }
    public function getDetails()
    {
        echo "<br><br><br>Name:$this->name <br><br><br>Type:$this->type <br><br><br>Color:$this->color";
    }
}
//instanciating the childclass
$fruit=new Apples();
//overiding
$fruit->price();
//inheritance
$fruit->getDetails();
?>