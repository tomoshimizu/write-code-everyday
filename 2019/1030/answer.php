<?php

// 未入力の場合は再入力
if (empty($_POST['answer'])) {
  print('答えが未入力です<br/>');
  echo '<form action="question.php" method="POST"><button>▶ 問題に戻る</button></form>';
  return;
}

// POSTされた値を代入
$month = $_POST['month'];
$answer = $_POST['answer'];

if (isvalidAnswer($answer, $month)) {
  print('正解です、すごいね！');
  echo '<form action="question.php" method="POST"><button>★もう一度挑戦する★</button></form>';
} else {
  print('残念、不正解…！<br/>');
  echo '<button type="button" onclick="history.back()">再チャレンジ</button>';
}

// 回答が正解かどうかチェックするメソッド
function isvalidAnswer($answer, $month) {
  switch ($month) {
    case 1:
      if ($answer == "January") {
        return true;
      } else {
        return false;
      }
      break;
    case 2:
      if ($answer == "February") {
        return true;
      } else {
        return false;
      }
      break;
    case 3:
      if ($answer == "March") {
        return true;
      } else {
        return false;
      }
      break;
    case 4:
      if ($answer == "April") {
        return true;
      } else {
        return false;
      }
      break;
    case 5:
      if ($answer == "May") {
        return true;
      } else {
        return false;
      }
      break;
    case 6:
      if ($answer == "June") {
        return true;
      } else {
        return false;
      }
      break;
    case 7:
      if ($answer == "July") {
        return true;
      } else {
        return false;
      }
      break;
    case 8:
      if ($answer == "August") {
        return true;
      } else {
        return false;
      }
      break;
    case 9:
      if ($answer == "September") {
        return true;
      } else {
        return false;
      }
      break;
    case 10:
      if ($answer == "October") {
        return true;
      } else {
        return false;
      }
      break;
    case 11:
      if ($answer == "November") {
        return true;
      } else {
        return false;
      }
      break;
    case 12:
      if ($answer == "December") {
        return true;
      } else {
        return false;
      }
      break;
    default:
      return false;
      break;
  }
}
