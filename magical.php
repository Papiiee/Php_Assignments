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



