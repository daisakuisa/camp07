<?php
// 1.GETでid値を取得
$id = $_GET["id"];


// 2.DB接続
include("func.php");

$pdo = db_connect();

// 3.SELECT * FROM gs_bm_table WHERE id =:id;
$sql = "SELECT * FROM gs_user_table WHERE id =:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

// 4.データ表示
$viwe="";
if($status==false){
// execute(SQL実行時にエラーがある場合)
$error = $stmt->errorInfo();
exit("ErrorQuery:".$error[2]);

}else{
    // データのみ抽出の場合はwhileループで取り出さない
    $row = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>データ更新</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<!-- <body id="main"> -->
<body>
  
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="list_view.php">データ一覧</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<form method="post" action="update.php">
  <div class="jumbotron">
    <filelset>
    <legend>登録データ詳細</legend>
     <label>user_name：<input type="text" name="lna" value="<?=$row["u_name"]?>"></label><br>
     <label>user_id：<input type="text" name="lid" value="<?=$row["u_id"]?>"></label><br>
     <label>user_pw：<input type="text" name="upw" value="<?=$row["u_pw"]?>"></label><br>
     <label>user_nuser：<input type="text" name="lfg" value="<?=$row["life_flg"]?>"></label><br>
     
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
