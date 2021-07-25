<?php
// 2つの整数値を読み込んで、後者が前者の約数であれば「BはAの約数です。」と表示。
// そうでなければ「BはAの約数ではありません。」と表示

$numA = $numB = 0;
// 値が入力されていれば代入
if (!empty($_POST['numA']) && !empty($_POST['numB'])) {
  $numA = $_POST['numA'];
  $numB = $_POST['numB'];
}

// 約数判定
if ($numA % $numB == 0) {
  print('BはAの約数です。');
} else {
  print('BはAの約数ではありません。');
}
echo '<br/><button><a href="form.php" style="text-decoration:none">もう一度</a></button>';
