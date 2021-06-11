<!-- ceil（切り上げ） -->
<?php 
 $x = 4.5;
 echo ceil($x);
 echo "<br>";
?>
<!-- floor（切り捨て） -->
<?php 
$x = 4.5;
echo floor($x);
echo "<br>";
?>
<!-- round（四捨五入） -->
<?php 
 $x = 3.5;
 echo round($x);
 echo "<br>";
?>
<!-- pi（円周率） -->
<?php
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area;
        echo "<br>"; 
    }
    // 半径が3の円の面積の計算
    circleArea(3);
?>
<!-- mt_rand（乱数） -->
<?php 
  echo mt_rand(1, 1000);
  echo "<br>"; 
?>
<!-- strlen（文字列の長さ） -->
<?php 
 $str = "hogehogehogehoge";
 echo strlen($str);
 echo "<br>";
?>
<!-- strpos（検索） -->
<?php 
$str = "okada";
echo strpos($str, "k");
echo "<br>";
?>
<!-- substr（文字列の切り取り） -->
<?php 
  $str = "okada";
  echo substr($str, -4, 2);
  echo "<br>";
?>
<!-- str_replace（置換） -->
<?php 
 $str = "okada";
 echo str_replace("ka", "KA", $str);
 echo "<br>";
?>
<!-- printf（フォーマット化した文字列を出力） -->
<?php 
$name = "岡田さん";
$limit_number = 20;
printf("%sの残り時間はあと%dです", $name, $limit_number);
echo "<br>"; 
$limit_hour = 4;
 $limit_minute = 4;
 printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
 echo "<br>";
?>
<!-- sprintf（変数に代入できるprintf） -->
<?php 
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";
// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
?>