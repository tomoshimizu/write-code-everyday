<?php

/**
 * Two Number Sum
 * 
 * Test
 * [3, 5, -4, 8, 11, 1, -1, 6]
 * 10
 */

$input_array = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));
$array = explode(' ', $input_array);
$target_sum = trim(fgets(STDIN));

var_dump(twoNumberSum1($array, $target_sum));
var_dump(twoNumberSum2($array, $target_sum));

// 和が指定の数になる組み合わせを探す
function twoNumberSum1($array, $target_sum)
{
    for ($i1=0; $i1<count($array); $i1++) {
        for ($i2=$i1+1; $i2<count($array); $i2++) {
            if ($array[$i1] + $array[$i2] == $target_sum) {
                return array($array[$i1], $array[$i2]);
            }
        }
    }

    return array();
}

function twoNumberSum2($array, $target_sum)
{
    for ($i=0; $i<count($array); $i++) {
        $potentialMatch = $target_sum - $array[$i];
        $idx = array_search($potentialMatch, $array);
        
        // 同じ数が2回使用されないようにする
        if (in_array($potentialMatch, $array) && $i !== $idx) {
            return array($array[$i], $potentialMatch);
        }
    }

    return array();
}
