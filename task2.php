<?php

/**
 *  Question 2: Write a function to sort an array
 * ArraySort :This function uses insertion sort algorithm to sort an array or numbers
 *
 * @input $array an array of numbers
 */


function ArraySort(&$array){

    $count = count($array);

    if($count < 2)
        return;

    for($i=0; $i < $count; $i++){
        $val = $array[$i];
        $j = $i-1;
        while($j>=0 && $array[$j] > $val){
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $val;
    }
}

$array1 = array(4,0,-4,2,1,6,9,3,8,7);
ArraySort($array1);

$array2 = array(5,0,11,2,56,89,1,2,17,-10,0);
ArraySort($array2);

echo implode(',',$array1);
echo '<br/>'.implode(',',$array2);