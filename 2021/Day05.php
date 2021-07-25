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

var_dump($array);