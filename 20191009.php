<?php
// for文を使って、1～10のランダムな数字が入った配列を作成してください。
// 要素数(部屋の数)は3、重複しても可とする。

print("【プログラム演習問題11】<br/>");
// 1～10までの数字が入った配列を生成
$nums = array();
for ($i=1; $i<=10; $i++) {
  $nums[] += $i;
}
// ランダムな3つの数値を取り出し配列に格納
$keys = array_rand($nums, 3);
var_dump($keys);

// 以下の要素を持つ配列を作成。
// “aaa”, “bbb”, “ccc”
// for文やforeach文を使って配列の全ての要素を表示するプログラムを作成してください。
print("<br/><br/>【プログラム演習問題12】<br/>");
$array = array("aaa", "bbb", "ccc");
foreach ($array as $key) {
  echo $key.'<br/>';
}
