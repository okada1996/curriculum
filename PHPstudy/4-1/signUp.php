<?php

// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');
// POSTで送られていれば処理実行
session_start();
$errorMessage = "";
$signUpMessage = "";

if (isset($_POST["signUp"])) {
  // nameとpassword両方送られてきたら処理実行
  if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
    // PDOのインスタンスを取得FILL_IN
    try {
      $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       
      $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
      // パスワードをハッシュ化
      // プリペアドステートメントの作成 FILL_IN 
      // 値をセット　FILL_IN
      // 実行 FILL_IN
      $stmt->execute(array($name, password_hash($password, PASSWORD_DEFAULT)));
      $userid = $pdo->lastinsertid();
      //登録完了メッセージ出力
      $signUpMessage = '登録が完了しました。';
    } catch (PDOException $e) {
      // エラーメッセージの出力 FILL_IN 
      $errorMessage = 'データベースエラー';
      // 終了 FILL_IN
    }
  }
}
?>




<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <div>
    <?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?>
  </div>
  <div>
    <?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?>
  </div>
  <h1>新規登録</h1>
  <form method="POST" action="">
    user:<br>
    <input type="text" name="name" id="name">
    <br>
    password:<br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="submit" id="signUp" name="signUp">

  </form>
</body>

</html>