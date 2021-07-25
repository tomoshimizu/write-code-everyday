<?php

/**
 * Binary Search
 * 
 * Test
 * [0, 1, 21, 33, 45, 45, 61, 71, 72, 73]
 * 33
 */

// 標準入力
$input_nums = str_replace(array('[', ']', ','), '', trim(fgets(STDIN)));
$nums = explode(' ', $input_nums);
$target = trim(fgets(STDIN));

echo search($nums, $target);
echo binarySearch($nums, $target);

/**
 * 指定の値を探す（ループ）
 */
function search($nums, $target) {
    for ($i=0; $i<count($nums); $i++) {
        if ($nums[$i] == $target) {
            return $i;
        }
    }
}

/**
 * 指定の値を探す（バイナリーサーチ）
 * 
 * 配列を2分割する
 * 2分割した真ん中の数字=ターゲットになるまで繰り返す
 */
function binarySearch($nums, $target)
{
    $halfIdx = (int)(count($nums) / 2);

    if ($nums[$halfIdx] === $target) {
        return $halfIdx;
    }

    // ターゲット値が真ん中の値よりも大きい場合
    if ($target > $nums[$halfIdx]) {
        // 真ん中のインデックス〜最後までを切り出し
    }

    // ターゲット値が真ん中の値よりも小さい場合
    if ($target < $nums[$halfIdx]) {
        // 先頭〜真ん中のインデックスまでを切り出し
    }
}