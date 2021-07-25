<?php
// 配列aの要素をすべて配列bに逆順にコピーするプログラム

$a = array(1, 2, 3, 4, 5);
$b = array_reverse($a);

print('元の配列：['.implode(', ', $a).']<br/>コピー後の配列：['.implode(', ', $b).']');
