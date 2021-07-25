<!-- 【応用1｜課題18】
2桁の整数値（10~99）を当てさせる数当てゲーム -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>number guessing game</title>
</head>
<body>
  <h3>数当てゲーム開始！</h3>
  <p>10~99の数を入力してね！</p>
  <form action="" method="post">
    <input type="text" required name="num">
    <input type="submit" value="判定">
  </form>
</body>
</html>

<?php
$answer = 35;
$num = 0;

// submitされたら値を代入
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $num = $_POST['num'];
  // 数字チェック
  if (is_numeric($num)) {
    // 判定
    if ($num < $answer) {
      print('<br/>残念！もっと大きい数だよ！');
    } elseif ($num > $answer) {
      print('<br/>残念！もっと小さい数だよ！');
    } else {
      print('<br/>正解です！<br/>');
    }
  } else {
    print('<br/>入力値が間違っています。<br/>10～99までの数字を入力してください。');
  }
}
?>
