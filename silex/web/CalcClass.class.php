<?php
class CalcClass
{
    function addition($number) {
        return $number + $number;
    }
    function multiplication($number) {
        return $number * $number;
    }
    function fak($number) {
        if ($number == 0) {
            return 1;
        } else {
            return $number * $this->fak($number - 1);
        }
    }
}
?>