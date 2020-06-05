<?php
session_start();


//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$lid = $_POST["lid"];
$lpw  = $_POST["lpw"];

//2. DB接続します xxxにDB名を入力する
// 関数func.phpより
include("func.php");
loginCheck();
$pdo = db_connect();


//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$sql = "SELECT * FROM gs_user_table WHERE u_id=:lid AND u_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw);  //Integer（数値の場合 PDO::PARAM_INT)
$res = $stmt->execute();

//４．データ登録処理後
if($res==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

// 3.抽出データ数を取得

$val = $stmt->fetch();//1レコードだけ取得する方法

// 4.核当するレコードがあればSESSIONに値を代入(空じゃなければ)
if( $val["id"] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["u_name"] = $val['u_name'];
    //?Login処理okの場合select.phpへ
    header("location: select.php");
}else{
//Login処理ngの場合login.PHPへ
    header("Location: login.php");
}
// 処理終了
ecit();

?>
