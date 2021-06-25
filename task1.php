<?php
declare(strict_types=1);

// RANGE
//     FUNCTION

// the rangeNum function can also accept an optional step value
function rangeNum(float $start, float $end, float $step =1) {
    $values = array();
    $j = 0;
    $step =  abs($step);
    if(($start == 0) and ($end == 0)) {
        return "lower Limit and upper limit error ";
    }elseif ($start > $end) {
        
        $a = $start;
        for ($i=$end; $i <= $start ; $i += $step) { 

            $values[$j] = $a--;    //assign each value to array
            ++$j;                //increment the variable used to index the array
        }
    }
    else {
        for ($i=$start; $i <= $end ; $i = $i + $step) { 

            $values[$j] = $i;    //assign each value to array
            ++$j;                //increment the variable used to index the array
        }
    }

    return (array)($values); //ensures the return type is an array
    
}

//for testing the rangeNum function 
print_r(rangeNum(8,10));


// SUM
//     FUNCTION
function sum(array $values) {
    //check if array is empty
    if (sizeof($values) > 0) {
        $result = 0;
        for ($i=0; $i < sizeof($values); $i++) { 
            $result += $values[$i];
        }
        return $result; //returns sum of array contents
    }else {
        return "Error: Empty Array";
    }
}

//for testing sum function
echo (sum([2,3,5])); //using the array return from rangeNum function
?>
