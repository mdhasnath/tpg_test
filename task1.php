<?php

/*
 * Question 1: Create a script to construct the following pattern, using a nested for loop.
 * The code below generates a pattern as specified by Q1.
 *
 */
$row_count  = 10;
$mid_row    = $row_count/2;

for($row=0; $row<$row_count; $row++){

    if($row < $mid_row){

        for($column=0; $column<= $row; $column++){
            echo "* ";
        }

    }else{

        for($column=0; $column<($row_count-$row); $column++){
            echo "* ";
        }
    }

    echo "<br/>";
}

