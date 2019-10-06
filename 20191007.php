<?php
// プログラム演習問題7
// 以下の要素を持つ配列を作成してください。
// {“宮島”, “天橋立”, “松島”}
$places = array("宮島", "天橋立", "松島");
var_dump($places);

// プログラム演習問題8
// 以下の要素を持つ連想配列を作成してください。
// (
// “残業” => “zangyo”,
// “財閥” => “zaibatsu”,
// “過労死” => “karoshi”
// )
$assoArray = array(
  "残業" => "zangyo",
  "財閥" => "zaibatsu",
  "過労死" => "karoshi"
);
var_dump($assoArray["残業"]);
var_dump($assoArray["財閥"]);
var_dump($assoArray["過労死"]);
