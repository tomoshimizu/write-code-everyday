<?php
// 数え年と性別から厄年を判定するプログラム。
// 変数を2つ定義し、1つ目は数えの年齢、2つ目は性別を代入。
// 厄年の定義は以下の通り。
// 男性：数えで25歳、42歳、61歳
// 女性：数えで19歳、33歳、37歳

define('BAD_YEAR', '<center>今年は厄年です。<br/>お祓いに行きましょう。<br/><a href="https://kurashi-no.jp/I0023303">お祓いでおすすめの神社はこちら</a></center>');
define('NOT_BAD_YEAR', '<center>今年は厄年ではありません。</center><br/>');
define('BACK_BUTTON', '<center><a href="inputData.php"><input type="button" value="もう一度"></a></center>');

$countAge = $gender = 0;
if (!empty($_POST['countAge']) && !empty($_POST['gender'])) {
  $countAge = $_POST['countAge'];
  $gender = $_POST['gender'];
} else {
  echo "<center>数え年または性別が入力されていません。</center>".BACK_BUTTON;
}

// 男性
if ($gender == 1) {
  switch ($countAge) {
    case 25:
    case 42:
    case 61:
      echo BAD_YEAR;
      break;
    default:
      echo NOT_BAD_YEAR.BACK_BUTTON;
      break;
  }
// 女性
} elseif ($gender == 2) {
  switch ($countAge) {
    case 19:
    case 33:
    case 37:
      echo BAD_YEAR;
      break;
    default:
      echo NOT_BAD_YEAR.BACK_BUTTON;
      break;
  }
}
