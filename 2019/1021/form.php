<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task29</title>
  <style>
    h3 {
      width: 19em;
      color: #364e96;/*文字色*/
      border: solid 3px #364e96;/*線色*/
      padding: 0.5em;/*文字周りの余白*/
      border-radius: 0.5em;/*角丸*/
    }
    input {
      width: 10em;
    }
  </style>
</head>
<body>
  <h3>読み込んだ数だけ＊を表示するプログラム</h3>
  <form action="result.php" method="POST">
    <table>
      <tr>
        <td>何個＊を表示しますか？</td>
      </tr>
      <tr>
        <td><input type="number" required name="num" min="1" placeholder="個数を選択"></td>
      </tr>
      <tr>
        <td><input type="submit" value="表示"></td>
      </tr>
    </table>
  </form>
</body>
</html>
