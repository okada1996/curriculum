<!-- ループ文 × 条件分岐 -->
<?php
$x = 0;
$i = 0;
while ($x <= 40) {
  $i++;
  $s = mt_rand(1,6);
  echo $i . "回目=" . $s ;
  $x += $s;
  echo "<br>";
}
echo "合計" . $i . "回でゴールしました";
echo "<br>";
?>

<!-- 関数 × 条件分岐 -->
<?php 
date_default_timezone_set('Asia/Tokyo');
echo date('今H時台です');
echo "<br>";

$hour = date('H');
if (4 <= $hour && $hour <= 12) {
  echo "おはようございます";
}elseif (12 <= $hour && $hour <= 20) {
  echo "こんにちは";
}else {
  echo "こんばんは";
}

?>