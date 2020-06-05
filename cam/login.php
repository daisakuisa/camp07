<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="">ログイン画面</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="login_act.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ログイン</legend>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>password：<input type="text" name="lpw"></label><br>
     <input type="submit" value="ログイン">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


    
</body>
</html>