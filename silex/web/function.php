<?php
if(isset($_GET["name"])) {
    $name = $_GET["name"];
}else {$name = "World";}
if(isset($_GET["limit"])) {
    $limit = $_GET["limit"];
}else {$limit = 10;}

    echo "Hello " . $name . "!<br/><hr/>";
        for($i=0;$i<$limit;$i++) {
            echo $i . "! = " . fak($i) . "</br>";
        }

    function fak($number) {
        if($number==0)  {
            return 1;
        }
        else {
           return $number * fak($number-1);
        }
    }
    $cities = array ("London", "Berlin", "Paris", "Warsaw");
    echo "<hr/>ASC:<br/>";
    sort($cities);
    echo implode(", ", $cities);
    echo "<br/>DESC:<br/>";
    rsort($cities);
    foreach($cities as $i) {
        echo $i . " ";
    }
    echo implode(", ", $cities);
    echo "<br/>";
    $hi = explode(", ", "a, b, c");
    echo implode(":", $hi);
?>

