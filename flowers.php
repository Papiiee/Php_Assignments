<?php

class flowers
{
    public $kingdom = "Plantae  ";
    public $classification="Begoniaceae  ";
    public $scientific_name="Begonia  ";
    public $worth="$10  ";
    public $color="red";

    public function details()
    {
        echo "Kingdom:$this->kingdom,Classification:$this->classification,Scientific Name:$this->scientific_name";

    }

    public function purchase()
    {
        echo "Price:$this->worth";
    }

     public function appearance()
    {
        echo "Color:$this->color";
    }
}
    $flowers=new flowers();
    $flowers->purchase();
    $flowers->details();
    $flowers->appearance();


?>