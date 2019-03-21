<?php
//abstract class Shape
//{
//    abstract public function calculateArea();
//}
//class Square extends Shape
//
//{
//    public $length=10;
//    public $width=25;
//    public $area;
//    public function calculateArea()
//    {
//      echo "<br><br>The area is:<br><br>" . $this->length * $this->width;
//    }
//    public function displayShape()
//    {
//    echo "<br><br>I am a Square!<br><br>";
//    }
//}
//$square=new Square();
//$square->displayShape();
//$square->calculateArea();

?>

<?php
interface Shape
{
    public function calculateArea();
}
interface Color
{
    public function displayColor();

}
class Square implements Shape,Color

{
    public $length=10;
    public $width=25;
    public $area;
    public $color="pink";
    public function calculateArea()
    {
        echo "<br><br>The area is:<br><br>" . $this->length * $this->width;
    }
    public function displayShape()
    {
        echo "<br><br>I am a Square!<br><br>";
    }
    public function displayColor()
    {
         $colors=['bright'=>'yellow','dull'=>'black'];
        //echo "I am also colored!" ;
       unset($colors['bright']);
        var_dump($colors,isset($colors['bright']));
    }
}
$square=new Square();
$square->displayShape();
$square->displayColor();
$square->calculateArea();

?>
