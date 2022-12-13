<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
echo date("Y年m月d日 H時i分s秒")."<br />";
// ・現在日時から３日後
echo date("Y年m月d日 H時i分s秒",strtotime("+3 day"))."<br />";
// ・現在日時から１２時間前
echo date("Y年m月d日 H時i分s秒",strtotime("-12 hour"))."<br />";
// ・2020年元旦から現在までの経過日数
//Day1
$date1 = '2020-01-01';
//Day2
$date2 = 'today';
//計算
echo ((strtotime($date2) - strtotime($date1)) / 86400).'日経過してます';
// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください
?>