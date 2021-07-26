<?php

/**
 * Bubble Sort
 * 
 * Test
 * [8, 5, 2, 9, 5, 6, 3]
 */

// 標準入力
$input_array = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));
$array = explode(' ', $input_array);

var_dump(BubbleSort($array));

function BubbleSort($array)
{
    for ($i=0; $i<count($array); $i++) {
        $newLength = count($array) - $i;
        for ($j=1; $j<$newLength; $j++) {
            if ($array[$j-1] > $array[$j]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $tmp;
            }
        }
    }

    return $array;
}