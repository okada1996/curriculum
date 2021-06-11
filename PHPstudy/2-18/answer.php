<link rel="stylesheet" href="http://localhost/LetsEngineer/curriculum/2-18/style.css">
<body text="white">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$my_name = $_POST['my_name'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$select1 = $_POST['select1'];
$select2 = $_POST['select2'];
$select3 = $_POST['select3'];
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<div>
<?php 
if($select1 === $answer1){
	echo "正解！";
}else{
	echo "残念･･･";
}
?>
</div>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<div>
<?php 
if($select2 === $answer2){
	echo "正解！";
}else{
	echo "残念･･･";
}
?>
</div>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<div>
<?php 
if($select3 === $answer3){
	echo "正解！";
}else{
	echo "残念･･･";
}
?>
</div>