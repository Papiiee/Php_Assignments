<?php
$rentalhouses = "three bedroom";

switch ($rentalhouses) {
    case "singleroom":
        echo "The cost is 7000!";
        break;
    case "doubleroom":
        echo "The cost is 12000!";
        break;
    case "one bedroom":
        echo "The cost is 20000!";
        break;
    default:
        echo "There is no more vacancy!</br></br></br></br></br></br></br></br></br></br></br></br>";
}


$grade ="77";

if ($grade < "38") {
    echo "E!";
} elseif ($grade <="50") {
    echo "D!";
} elseif ($grade <= "64") {
    echo "C!";
} elseif ($grade <= "76") {
    echo "B!";
} else {
    echo "A!";
}
?>
