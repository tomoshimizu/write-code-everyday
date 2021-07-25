<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>task08</title>
</head>
<body>
  <!--応用1｜課題07までは似たような問題だったので飛ばしています-->
  <h3>【課題08｜読み込んだ3つの整数値の最小値を求めて表示するプログラム】</h3>
  <form action="result.php" method="POST">
    <p>好きな数を3つ入力してください。<br/>一番小さい数を求めます。</p>
    <table>
      <tr>
        <td><input type="number" required name="num1" placeholder="1つめの数"></td>
      </tr>
      <tr>
        <td><input type="number" required name="num2" placeholder="2つめの数"></td>
      </tr>
      <tr>
        <td><input type="number" required name="num3" placeholder="3つめの数"></td>
      </tr>
      <tr>
        <td><input id="submit-button" type="submit" value="一番小さい数は・・・"></td>
      </tr>
    </table>
  </form>
</body>
</html>

<!--CSS-->
<style>
h3 {
  border-bottom: 1px solid #008080;
  border-left: 10px solid #008080;
  padding: 7px;
}
#submit-button {
  position: relative;
  display: inline-block;
  font-weight: bold;
  padding: 0.25em 0.5em;
  text-decoration: none;
  color: #008080;
  background: #ECECEC;
  transition: .4s;
}
</style>
