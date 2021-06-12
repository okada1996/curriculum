<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
// require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
  header("Location: login.php");
  exit;
}

$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

// PDOのインスタンスを取得
$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
$pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
    // SQL文の準備
    $sql = "UPDATE posts SET title = :title, content = :content WHERE id = :id";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // titleのバインド
    $stmt->bindParam(':title', $title);
    // contentのバインド
    $stmt->bindParam(':content', $content);
    // idのバインド
    $stmt->bindParam(':id', $id);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    exit('データベース接続失敗。' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>編集完了</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>編集完了</h1>
        <p>ID: <?php echo $id; ?>を編集しました。</p>
        <a href="main.php">ホームへ戻る</a>
    </body>
</html>