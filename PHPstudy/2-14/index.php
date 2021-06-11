<!-- count（要素の数を数える） -->
<?php 
 $members = ["tanaka", "sasaki", "kimura", "yoshida",];
 echo count($members);
 echo "<br>";
?>
<!-- sort（要素の並べ替え） -->
<?php 
$members = ["tanaka", "sasaki", "kimura", "yoshida",];
sort($members);
var_dump($members);
echo "<br>";
?>

<?php 
 $numbers = [26, 35, 17, 67, 45, 50];
 sort($numbers);
 var_dump($numbers);
 echo "<br>";
?>
<!-- in_array（配列の中にある要素が存在しているか） -->
<?php
    $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
    if (in_array("tanaka", $members)) {
        echo "田中さんがいるよ！";
    } else {
        echo "田中さんはいないよ！";
    }
    echo "<br>"; 
?>
<!-- implode（配列を結合して文字列に変換）-->
<?php 
  $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
  $atstr = implode("と", $members);
  var_dump($atstr);
  echo "<br>"; 
?>
<!-- explode（文字列を指定の区切りで配列にする） -->
<?php 
 $re_members = explode("と", $atstr);
 var_dump($re_members);
 echo "<br>";
?>
