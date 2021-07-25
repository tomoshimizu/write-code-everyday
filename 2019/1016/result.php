<?php

// 【応用1｜課題08】
// 読み込んだ3つの整数値の最小値を求めて表示するプログラム

// POST送信された値を配列に格納
$nums = array($_POST['num1'], $_POST['num2'], $_POST['num3']);
print("最小値は".min($nums)."です。<br/>");
echo '<button><a href="form.php" style="text-decoration: none">もう一度</a></button>';
