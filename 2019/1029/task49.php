<?php
// 配列の要素の並びをシャッフルするプログラム

$nums1 = array(6, 11, 10, 9, 12);
print('元の配列は['.implode(', ', $nums1).']です。<br/>');

// 配列の要素をシャッフル
shuffle($nums1);

$nums2 = array();
foreach ($nums1 as $num) {
  $nums2[] = $num;
}
print('シャッフル後の配列は['.implode(', ', $nums2).']です。');
