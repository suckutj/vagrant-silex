<?php
require_once "CalcClass.class.php";

$calc = new CalcClass();

for($i=0;$i<10;$i++) {
    echo "$i + $i = " . $calc->addition($i);
    echo "<br/>";
    echo "$i * $i = " . $calc->multiplication($i);
    echo "<br/>";
    echo "$i! = " . $calc->fak($i);
    echo "<hr/>";
}
?>