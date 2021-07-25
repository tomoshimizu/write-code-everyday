<?php
// 読み込んだ個数だけ＊を表示するプログラム

$num = 0;
if (!empty($_POST['num'])) {
  $num = $_POST['num'];
}

for ($i=1; $i<=$num; $i++) {
  if ($i % 5 === 0) {
    print('*<br/>');
  } else {
    print('*');
  }
}
echo '<form action="form.php"><button>もう一度</button></form>';
