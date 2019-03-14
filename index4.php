<?php

class flowers
{
    public $kingdom;
    public $classification;
    public $scientific_name;
    public $worth;
    public $color;
}
{
     function details()
    {
        print('Nature is beautiful indeed </br></br></br>');
    }
}
echo $name->kingdom = 'Kingdom:</br></br>plantae</br></br></br>';
echo $name->classification = 'Classification:</br></br>Begoniaceae</br></br></br>';
echo $name->scientific_name = 'Scietific Name:</br></br>Begonia</br></br></br>';
echo $price->worth = 'Worth:</br></br>$10</br></br></br>';
echo $looks->color = 'Color:</br></br>red</br></br></br>';
$looks = new flowers();
$looks->appearance();
$price = new flowers();
$price->purchase();
$details = new flowers();
$details->details();

{
     function purchase()
    {
        print ('Its totally worth it!</br></br></br>');
    }
}
{
     function appearance()
    {
        print('This is such a lovely flower!</br></br></br>');
    }
}

?>