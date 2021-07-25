<?php
// 1から100までの合計を求めるプログラム
print("【プログラム演習問題9】<br/>");
$sum = 0;
for ($i=1; $i<=100; $i++) {
  $sum += $i;
}
echo $sum.'<br/><br/>';
?>

<!-- 月のカレンダーを表示するプログラム
日曜日開始、日数が31の月を想定して作成 -->
<?= "【プログラム演習問題10】<br/>"; ?>
<table border="solid: 1px" text-align="right">
  <tr align="right">
    <?php for ($i=1; $i<=31; $i++) { ?>
      <td><?=$i; ?></td>
      <?php if ($i % 7 == 0) { ?>
        </tr><tr align="right">
      <?php }
    } ?>
  </tr>
</table>
