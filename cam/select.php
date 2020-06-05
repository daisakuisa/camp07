<?php
session_start();
include("func.php");
loginCheck();

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
    <link rel="stylesheet" href="css/styles.css" />
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
        <img src="image/top/sake03.png" alt="肴の画像" />
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

    <!--about-->
    <section id="about">
      <div class="layout-about">
        <h2 class="section-title section-title__yellow">
          サケトアテタノシミタイとは？<span class="section-title__ja"
            >酒と肴を探せる！楽しめる！もっと好きになる酒と肴のポータルサイト</span
          >
        </h2>
        <div class="section-sentence">
          <p class="section-paragraph">
            お酒と肴ってこんな楽しみ方もあるよ。
          </p>
          <p class="section-paragraph">
            こういうところに着目すると面白いよ。こんなお酒、おつまみがあったよ。など、いろんな人<br />
            のお酒と肴好き！な気持ちが集まって、みんなの生活がちょっぴり豊かに広がるようなサイト<br />
            を目指します。
          </p>
          <p class="section-paragraph">
            お店だけでなくお家でもお酒と肴の楽しみ方が広がり、友人・家族、大切な人と一緒に過ごせる<br />
            ような時間が増えるかもしれない。自分だけのお酒と肴を楽しめるような場所や時間も増えるか<br />
            もしれない。お酒と肴との関わり方、繋がりをもっと広げるような活動をしていきたいと考えています。
          </p>
          <p class="section-paragraph">
            日本は北海道から沖縄までと四季折々の食材があり、地方の特産品のお酒や肴をもっと身近に感じ<br />
            られるようになってきています。まずは自分がもっと全国のお酒や肴を知りたいという気持ちから<br />
            サケトアテタノシミタイをはじめました。
          </p>
        </div>
      </div>
      <div>
        <!-- <img
          src="images/about/about_img.jpg"
          alt="チーズアカデミーの学校の様々な様子"
        /> -->
      </div>
    </section>
    <!--// about-->

    <!--katu-->
    <section id="course">
      <div class="layout-course">
        <h2 class="section-title section-title__modifier-primary">
          活<span class="section-title__ja">活とは？</span>
        </h2>
        <p class="text-center section-paragraph">
          気に入ったお酒やおつまみなど記録、紹介を残してみよう。
        </p>
      </div>

      <div class="bg-gray">
        <section id="course01">
          <div class="course-box">
            <div class="course-box__info">
              <div class="course-box__inner">
                <h3 class="course-box__title">「投稿」ボタンから登録してみよう</h3>
                <p class="course-box__paragraph">
                  活は自分だけのお気に入りのお酒や
                  食べ物の記録初めて行った酒蔵、ワ
                  イナリーの感動をぶつけたレポート
                  からマニアからの細かすぎるレポー
                  トまで日本中から様々な投稿が可能
                  です。
                </p>
              </div>
            </div>
            <div class="course-box__img">
              <!-- <img
                src="images/course/course_01.jpg"
                alt=""
              /> -->
            </div>
          </div>
        </section>

        

        
    <!--//katu-->

    <!--maga-->
    <section id="news">
      <div class="layout-news">
        <h2 class="section-title section-title__yellow">
          マガジン <span class="section-title__ja">酒と肴マガジン</span>
        </h2>
        <div class="wrapper">
          <ul class="news-list">
            <li class="news-list__item">
              <a href="#">
                <p class="news-list__thumb">
                  <img src="image/sake05.png" alt="九平次酒の画像" />
                </p>
                <div class="news-list__excerpt">
                  <h3 class="news-list__title">
                    「醸し人九平次」公式通販サイト「LA CAVE de
                    Kuheiji」5月24日(土)にオープン
                  </h3>
                  <p class="news-list__detail">
                    弊社は7年前から、フランス・ブルゴーニュで
                    「醸造家の科学反応」「日本酒の進化のヒント」
                    を求めワイン造りに取り組んでおり、そのファー
                    ストリリースを皆様にお届けしようと、ECサイト
                    をオープンいたしました。
                  </p>
                  <p class="news-list__date">2020.5.24</p>
                </div>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <p class="news-list__thumb">
                  <img src="image/sakura.jpg" alt="チーズの画像" />
                </p>
                <div class="news-list__excerpt">
                  <h3 class="news-list__title">春の風物詩チーズ「さくら」</h3>
                  <p class="news-list__detail">
                    さくら香る優しい味わいのチーズ「さくら」
                    北海道共働学舎さんが作る春限定の国産
                    チーズが今年も販売開始しました。
                  </p>
                  <p class="news-list__date">2020.3.05</p>
                </div>
              </a>
            </li>
            <li class="news-list__item">
              <a href="#">
                <p class="news-list__thumb">
                  <img src="image/raulent.jpg" alt="ワインの画像" />
                </p>
                <div class="news-list__excerpt">
                  <h3 class="news-list__title">ロゼシャンパーニュとしゃぶしゃぶの組み合わせ</h3>
                  <p class="news-list__detail">
                    ロゼを甘いと思い込んでいる方も多いと思いますが
                    キリリとさわやかな酸を感じるが、その後チェリー、
                    イチゴ、カシスなどの赤い果実系の心地よいアロマ
                    を余韻とともに楽しめる。
                  </p>
                  <p class="news-list__date">2020.2.12</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <a href="#" class="btn">更にマガジンを見る</a>
      </div>
    </section>
    <!--//maga-->

    <!--access-->
    <section id="access">
      <div class="bg-gray layout-access">
        <h2 class="section-title section-title__modifier-secondary">
          Access<span class="section-title__ja">会社情報</span>
        </h2>
        <div class="maps-outer">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3241.3949425153282!2d139.71155615086005!3d35.66727618010039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1479489504050"
            width="1366"
            height="300"
            frameborder="0"
            style="border: 0;"
            allowfullscreen
            class="maps"
          ></iframe>
        </div>

        <div class="access">
          <div class="access-list">
            <dl class="access-list__item">
              <dt class="access-list__item-title">会社名</dt>
              <dd class="access-list__item-detail">会社名</dd>
            </dl>
            <dl class="access-list__item">
              <dt class="access-list__item-title">事務所所在地</dt>
              <dd class="access-list__item-detail">
                〒107-0061 東京都港区北青山3-5-6 青朋ビル2F
              </dd>
            </dl>
            <dl class="access-list__item">
              <dt class="access-list__item-title">TEL</dt>
              <dd class="access-list__item-detail">
                <a href="tel:0123456789">01-2345-6789</a>
              </dd>
            </dl>
            <dl class="access-list__item">
              <dt class="access-list__item-title">FAX</dt>
              <dd class="access-list__item-detail">01-2345-6789</dd>
            </dl>
            <dl class="access-list__item">
              <dt class="access-list__item-title">MAIL</dt>
              <dd class="access-list__item-detail">
                <a href="mailto:dummy@cheeseacademy.tokyo"
                  >dummy@cheeseacademy.tokyo</a
                >
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
    <!--//access-->

    <!--contact-->
    <section id="contact">
      <div class="layout-contact">
        <h2 class="section-title section-title__modifer-thirdy">
          Contact
          <span class="section-title__ja">お問い合わせ</span>
        </h2>

        <form action="" class="wrapper">
          <div class="form">
            <div class="form-list">
              <dl class="form-item">
                <dt for="name" class="form-label">名前</dt>
                <dd class="form-detail">
                  <input type="text" name="name" id="name" class="form-parts" />
                </dd>
              </dl>
              <dl class="form-item">
                <dt for="kana" class="form-label">カナ</dt>
                <dd class="form-detail">
                  <input type="text" name="kana" class="form-parts" />
                </dd>
              </dl>
              <dl class="form-item">
                <dt for="email" class="form-label">メールアドレス</dt>
                <dd class="form-detail">
                  <input type="text" name="email" class="form-parts" />
                </dd>
              </dl>
              <dl class="form-item form-item__textarea">
                <dt for="detail" class="form-label form-label__textarea">
                  詳細
                </dt>
                <dd class="form-detail">
                  <textarea
                    name="detail"
                    id="detail"
                    cols="30"
                    rows="10"
                    class="form-parts form-parts__textarea"
                  ></textarea>
                </dd>
              </dl>
            </div>
          </div>
          <input type="submit" value="送信" class="btn btn-submit" />
        </form>
      </div>
    </section>
    <!--// contact-->

    <!--footer-->
    <footer class="footer text-center">
      <div class="wrapper">
        <small class="copyrights"
          >copyrights 2016 Cheeese Academy Tokyo All RIghts Reserved.
        </small>
      </div>
    </footer>
    <!--// footer-->
  </body>
</html>
