<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task32</title>
</head>
<body>
  <form action="" method="POST">
    <p>何段の二等辺三角形を表示しますか？</p>
    段数：<input type="text" required name="num">
    <input type="submit" value="表示">
  </form>
</body>


<?php
// POSTされていない場合
if (empty($_POST['num'])) {
  echo '<span style="color:red;">段数が入力されていません。</span>';
  return;
}
// 入力値が数値でない場合
if (!is_numeric($_POST['num'])) {
  echo '<span style="color:red;">数値以外の文字が入力されています。</span>';
  return;
}

$num = $_POST['num'];
for ($x=0; $x<$num; $x++) {
  for ($y=0; $y<=$x; $y++) {
    print('* ');
  }
  print('<br/>');
}
