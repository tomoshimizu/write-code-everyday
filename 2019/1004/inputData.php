<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>厄年を判定するプログラム</title>
  </head>
  <body>
    <div align="center">
      <form action="result.php" method="POST">
        <p>数え年と性別を入力してください。<br/>厄年か判定します。</p>
        <label>数え年</label>
        <select name="countAge">
          <option value="">--</option>
          <?php foreach (range(0,120) as $countAge): ?>
            <option value="<?=$countAge?>"><?=$countAge."歳"?></option>
          <?php endforeach; ?>
        </select><br/>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" style="width:150px">
          <legend>性別</legend>
            <input type="radio" name="gender" id="man" value=1>
            <label for="man">男性</label>
            <input type="radio" name="gender" id="women" value=2>
            <label for="women">女性</label>
        </fieldset><br/>
        <input type="submit" value="判定する">
      </form>
    </div>
  </body>
</html>
