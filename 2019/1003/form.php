<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>季節を表示するプログラム</title>
  </head>
  <body>
    <form action="result.php" method="POST">
      <label>1~12までの数字を入力してください。対応する季節を表示します。</label><br/>
      <select name="month">
        <option value="">--</option>
        <?php foreach(range(1,12) as $month): ?>
        <option value="<?=$month?>"><?=$month?></option>
        <?php endforeach; ?>
      </select><br/>
      <input type="submit" value="季節を表示" />
    </form>
  </body>
</html>
