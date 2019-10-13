<?php
// 以下の要素を持つ配列を作成。
// [“ccc”, “bbb”, “aaa”]
// 0番目と2番目の値を入れ替えるプログラム
// (“ccc”と”aaa”を入れ替える)
$base = array("ccc", "bbb", "aaa");
$tmp = $base[0];
$base[0] = $base[2];
$base[2] = $tmp;
var_dump($base);

// $base = array(
//   $base[0] => $base[2],
//   $base[1] => $base[1],
//   $base[2] => $base[0]
// );
// var_dump($base);
