<?php
// session_start();
// include("func.php");
// loginCheck();

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
              <li class="nav-item"><a href="km.php">投稿</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!--//header-->
<!-- コメントフォーム -->
    <form  method="post" action="km_insert.php" enctype="multipart/form-data">
    <p class="km-thumb">
    <img src="https://placehold.jp/400x400.png" alt=""></p>
<dt>画像</dt>
<dd><input type="file" name="fname" class="cms-item"accept="image/*"></dd>
<dt>名前</dt>
<dd><input type="text" name="km_name" placeholder="お名前" class="km_name"></dd>
<dt>場所</dt>
<dd><input type="text" name="km_pl" placeholder="" class="km_pl"></dd>
<dt>コメント</dt>
<dd><textarea name="km_text" id="" cols="30" rows="10">お酒や食べ物について紹介</textarea></dd>

<ul>
    <li>
        <a href="">戻る</a>
        <input type="submit" id=btn-update vlue="登録">
    </li>
</ul>
</form>
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