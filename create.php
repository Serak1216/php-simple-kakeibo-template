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




?>
