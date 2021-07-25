<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task31</title>
  <style>
    input {
      width: 10em;
    }
    .btn {
      display: inline-block;
      padding: 0.5em 1em;
      text-decoration: none;
      background: #f7f7f7;
      border-left: solid 6px #ff7c5c;
      color: #ff7c5c;
      font-weight: bold;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
    }
    .btn:active {
      box-shadow: inset 0 0 2px rgba(128, 128, 128, 0.1);
      transform: translateY(2px);
    }
  </style>
</head>
<body>
  <form action="result.php" method="POST">
    <table>
      <tr>
        <td>何段の正方形を表示しますか？</td>
      </tr>
      <tr>
        <td><input type="text" required name="num"> 段</td>
      </tr>
      <tr>
        <td><input class="btn" type="submit" required value="正方形を表示！"></td>
      </tr>
    </table>
  </form>
</body>
</html>
