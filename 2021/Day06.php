<?php

/**
 * Insertion Sort
 * 
 * Test
 * [8, 5, 2, 9, 5, 6, 3]
 */

// 標準入力
$input_array = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));
$array = explode(' ', $input_array);

var_dump(InsertionSort($array));

function InsertionSort($array)
{
    for ($i=1; $i<count($array); $i++) {
        $j = $i;

        while ($j>0 && $array[$j]<$array[$j-1]) {
            $tmp = $array[$j-1];
            $array[$j-1] = $array[$j];
            $array[$j] = $tmp;

            $j-=1;
        }
    }

    return $array;
}