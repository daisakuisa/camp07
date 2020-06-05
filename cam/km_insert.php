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

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>saketoate</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--header-->
    <header class="header">
      <!-- main visual -->
      <div class="main-visual">
        <h1 class="site-title">
          サケトアテタノシミタイ
          <span class="site-title__sub"
            >お気に入りのお酒と肴が見つかるサイト</span
          >
        </h1>
        <!-- <img src="images/header/hero_img.jpg" alt="チーズの画像" /> -->
        <img src="image/top/sake06.png" alt="肴の画像" />
      </div>

      <div class="header-above">
        <div class="wrapper header-inner">
          <p class="logo logo-header">
            <a href="login.php">ログアウト</a>
            <a href="newlog.php">マイページ</a>
            <!-- <a href="#"
              ><img
                src="images/header/header_logo.png"
                alt="Cheese Academy Tokyo"
            /></a> -->
          </p>
          <button class="btn btn-mobileMenu">Menu</button>
          <nav class="nav-outer">
            <ul class="nav clearfix">
              <li class="nav-item"><a href="#about">サケトアテタノシミタイとは？</a></li>
              <li class="nav-item"><a href="#course">活</a></li>
              <li class="nav-item"><a href="#news">マガジン</a></li>
              <li class="nav-item"><a href="#access">アクセス</a></li>
              <li class="nav-item"><a href="#contact">コンタクト</a></li>
              <li class="nav-item"><a href="kei.php">活投稿</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!--//header-->






     <!--footer-->
     <footer class="footer text-center">
      <div class="wrapper">
        <small class="copyrights"
          >copyrights 2016 Cheeese Academy Tokyo All RIghts Reserved.
        </small>
      </div>
    </footer>
    <!--// footer-->
    <!-- jqueryを使う時はここでCDNを読み込みます（必ず先に読み込む） -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- ここにjsを読み込みます -->
    <script src="js/app.js"></script>
  </body>
</html>
