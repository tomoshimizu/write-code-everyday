<?php

// 正しいメールアドレスとパスワードであればOKと表示
if (empty($_POST['mail']) || empty($_POST['pass'])) {
  print('メールアドレスまたはパスワードが未入力です。');
  echo '<form action="form.php" method="GET"><button>ログイン画面へ</button></form>';
  return;
}

list($mail, $pass) = array(h($_POST['mail']), h($_POST{'pass'}));

// 文字列の比較
if (strcmp($mail, "test") == 0 && strcmp($pass, "test") == 0) {
  print('ログイン成功!');
} else {
  print('メールアドレスまたはパスワードが間違っています。');
  echo '<form action="form.php" method="GET"><button>再入力</button></form>';
}

// エスケープ処理
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
