<?php
// if(!isset($_POST["km_name"])  ||  $_POST["km_name"]==""){
// exit("ParameError!name!");
// }
// if(!isset($_POST["km_pl"])  ||  $_POST["km_pl"]==""){
// exit("ParameError!name!");
// }
// if(!isset($_POST["km_text"])  ||  $_POST["km_text"]==""){
// exit("ParameError!text!");
// }
// if(!isset($_FILES["fname"]["name"])  ||  $_POST["fname"]["name"]==""){
// exit("ParameError!Files!");
// }

$fname = $_FILES["fname"]["name"];
$km_name = $_POST["km_name"];
$km_pl = $_POST["km_pl"];
$km_text = $_POST["km_text"];

$upload = "../img/";
if(move_uploaded_file($_FILES['fname']['tmp_name'], $upload.$fname)){
  
}else{
  echo"Upload filed";
  echo $_FILES["fname"]["error"];
}


try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}
return $pdo;


$stmt = $pdo->prepare("INSERT INTO gs_km_table(id, km_name, km_pl, km_text, fname,
indate )VALUES(NULL, :km_name, :km_text, :fname, :sysdate())");

$stmt->bindValue(':km_name', $km_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':km_pl', $km_pl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':km_text', $km_text, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':fname', $fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: km.php");
  exit;

}

?>
