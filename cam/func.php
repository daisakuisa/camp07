<?php

// LOGIN認証チェック関数
function loginCheck(){
if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    echo"LOGIN Error!";
    exit();
}else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
}
}

function db_connect(){
//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
  return $pdo;
}
?>