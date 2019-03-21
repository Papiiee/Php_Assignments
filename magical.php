<?php

class WiFi
{
    public $device='OppoA3s<br><br><br>';
    public $connection;
    public function disconnect()
        // disconnect from the network
    {
        $this->connection = null;
        echo $this->connection . ' disconnected' . PHP_EOL;
    }
    public function  __destruct() {


        echo $this->device . ' connection was destroyed' . PHP_EOL;
    }
}
$wifi = new WiFi();
$wifi->disconnect();
unset($device);
?>

<?php
//...
//class Health
//
//{
//    public $fruits;
//
//    public function __construct($fruits)
//    {
//        $this->fruits=$fruits;
//    }
////public $fruits='mango';
//
// public function __isset($fruits)//[0=>'banana'1=>'apples'];
// {
//    return "This fruit is $fruits";
// }
//
//}
//$fruit=new Health('mango');
//
//...
