<?php
// 変数を定義して1から12のいずれかの数字を代入し、
// 代入されている数字に応じた季節を表示するプログラム
// 3, 4, 5 ⇒ 春
// 6, 7, 8 ⇒ 夏
// 9, 10, 11 ⇒ 秋
// 12, 1, 2 ⇒ 冬

// フォームから受け取った月を代入
$month = 0;
if (isset($_POST['month'])) {
  $month = $_POST['month'];
}

$str = "季節は";
switch ($month) {
  case 3:
  case 4:
  case 5:
    echo $str."春です";
    break;
  case 6:
  case 7:
  case 8:
    echo $str."夏です";
    break;
  case 9:
  case 10:
  case 11:
    echo $str."秋です";
    break;
  case 12:
  case 1:
  case 2:
    echo $str."冬です";
    break;
  default:
    echo "該当する季節がありません。<br/>";
    print '<button><a href="form.php" style="text-decoration: none;">もう一度入力</a></button>';
    break;
}
