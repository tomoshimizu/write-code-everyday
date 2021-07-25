<?php
// 記号文字＊を並べてn段の正方形を表示するプログラム

// 未入力または数値以外の場合
if (empty($_POST['num']) || !is_numeric($_POST['num'])) {
  return;
}

$num = $_POST['num'];
for ($x=1; $x<=$num; $x++) {
  for ($y=1; $y<=$num; $y++) {
    print('* ');
  }
  print('<br/>');
}

echo '<form action="form.php" method="POST"><button>もう一度</button></form>';
