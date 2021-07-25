<?php

/**
 * Validate Subsequence
 * 
 * Test
 * [5, 1, 22, 25, 6, -1, 8, 10]
 * [1, 6, -1, 11]
 */

$input_array = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));
$input_sequence = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));

$array = explode(' ', trim($input_array));
$sequence = explode(' ', trim($input_sequence));

echo isValidSubsequence($array, $sequence).PHP_EOL;

function isValidSubsequence($array, $sequence)
{
    $arrIdx = 0;
    $seqIdx = 0;

    while ($arrIdx < count($array) && $seqIdx < count($sequence)) {
        // シーケンスが配列に含まれていればインクリメント
        if ($array[$arrIdx] === $sequence[$seqIdx]) {
            $seqIdx+=1;
        }

        $arrIdx+=1;
    }

    return ($seqIdx === count($sequence)) ? 'true' : 'false';
}