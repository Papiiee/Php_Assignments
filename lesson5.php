<?php
class Flowers
{
    public $name;
    public $color;
    public $scent;
    public function setName($name)
{
    return $this->name=$name;
    //return$this;
}

    public function setColor($color)
{
    return $this->color=$color;
    //return$this;

}
     public function setScent($scent)

{
    return $this->scent=$scent;
    //return$this;
}
    public function getDetails()

{
     echo "Color:$this->color,Name:$this->name,Scent:$this->scent";
}
}
   $flower=new Flowers();
   $flower->setName('sunflower')->setColor('yellow')->setscent('nice')->getDetails();
   ?>