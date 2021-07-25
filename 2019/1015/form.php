<!DOCTYPE html
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task02</title>
</head>
<body>
  <h2>【課題02】</h2>
  <form action="result.php" method="POST">
    <table>
        <tr>
          <td>2つの正の整数値を入力してください。</td>
        </tr>
        <tr>
          <td>整数値1: <input type="text" name="numA" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" /></td>
          <td>整数値2: <input type="text" name="numB" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" /></td>
        </tr>
        <tr>
          <td><input type="submit" value="判定"/></td>
        </tr>
    </table>
  </form>
</body>
</html>
