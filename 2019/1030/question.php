<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task51</title>
</head>
<body>
  <!-- 1～12までの乱数を生成 -->
  <?php $month = rand(1, 12); ?>
  <form action="answer.php" method="POST">
    <h3>英単語学習プログラム</h3>
    <table>
      <tr>
        <td>対応する英語を入力してください。</td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="month" value="<?=$month;?>"><?=$month;?>月：
          <input type="text" autofocus required title="大文字小文字は問いません" name="answer">
        </td>
      </tr>
      <tr>
      <td><input type="submit" value="Final Answer?"></td>
      </tr>
    </table>
</body>
</html>
