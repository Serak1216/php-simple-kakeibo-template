<?php

// dbconnect.phpを読み込む：DBに接続
include_once('./dbconnect.php');


// 処理の流れ
// １．画面で入力された処理を取得する
// ２．PHPからMySQLへ接続
// ３．SQL文を作成して画面で入力された値をrecordsテーブルに追加
// ４．index.phpに画面遷移する

// 1. 画面で入力された値を取得
$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$type = $_POST['type'];

// var_dump($_POST);
// ３．SQL文を作成

$sql = "INSERT INTO records(title, type, amount, date, created_at, updated_at) VALUES(:title, :type, :amount, :date, now(), now())";

// 作成したSQLを実行できるように準備
$stmt = $pdo->prepare($sql);

// 値の設定、何を保存するのかを設定 bind=結びつける パラメーター：外部から投入されたデータ
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':type', $type, PDO::PARAM_INT);
$stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);

// SQLを実行
$stmt->execute();

// index.phpに遷移
header('Location: ./index.php');
exit;




?>
