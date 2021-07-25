<!-- 2つの整数値を読み込んで、
小さい方の数以上かつ大きい方の数以下の全整数を小さい順に表示するプログラム -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task19</title>
  <style type="text/css">
    h3 {
    color: #6594e0;
    border-bottom: dashed 2px #6594e0;
    }
    .submit-btn {
      display: inline-block;
      padding: 0.5em 1em;
      text-decoration: none;
      color: #6594e0;
      border: dashed 1px #6594e0;
      background: #f2fcff;
      border-radius: 3px;
      transition: .4s;
    }
    .submit-btn:hover {
      background: #cbedff;
      color: #FFF;
    }
    input {
      width: 15em;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <h3>小さい数から大きい数まで順番に表示するよ！</h3>
    <div>
      <table>
        <tr>
          <td><br/>好きな数を2つ入力してください。（順不同）</td>
        </tr>
        <tr>
          <td><input type="text" required name="num1" placeholder="1つめの数"></td>
        </tr>
        <tr>
          <td><input type="text" required name="num2" placeholder="2つめの数"></td>
        </tr>
        <tr>
          <td><input class="submit-btn" type="submit" value="小さい順に表示"></td>
        </tr>
      </table>
    </div>
  </form>
</body>
</html>

<?php
$num1 = $num2 = 0;

// postされたら値を代入
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // 数値判定
  if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
    list($num1, $num2) = array($_POST['num1'], $_POST['num2']);

    // 小さい方の数を求める
    $minNum = $maxNum = 0;
    if ($num1 < $num2) {
      $minNum = $num1;
      $maxNum = $num2;
    } elseif ($num2 < $num1) {
      $minNum = $num2;
      $maxNum = $num1;
    } else {
      print('2つの異なる数を入力してください');
    }

    // 小さい順に表示
    for ($i=$minNum; $i<=$maxNum; $i++) {
      echo $i.'<br/>';
    }
  } else {
    print('数値以外の数が入力されています。');
  }
}
?>
