<?php
// ビンゴシートを作成
$nums = [];

for ($i = 0; $i < 5; $i++) {
  $col = range($i * 15 + 1, $i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5); // 先頭の5つを取り出す
}

$nums[2][2] = "FREE";

// エスケープのための関数
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BINGO</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++) : ?>
      <tr>
        <?php for ($j = 0; $j < 5; $j++) : ?>
        <td><?= h($nums[$j][$i]); ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
    </table>
  </div>
</body>
</html>
