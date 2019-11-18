<?php

class Calculator
{
    protected $total = 0;

    public function add(array $values) {
        /*
        if (!is_array($values)) {
            return;
        }
        */

        foreach($values as $value) {
            $this->total += $value;
        }
    }

    public function total() {
        return $this->total;
    }
}

$calculator = new Calculator;
$calculator->add(2);
//$calculator->add([1, 2, 3, 4]);
echo $calculator->total();