<?php
// 入力値チェック（省略可能だが簡易で入れておく）
if ( $_SERVER[ 'REQUEST_METHOD' ] !== 'POST' ) {
  header( 'Location: form.html' );
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面 | 看護師、退職代行、転職サポート</title>
<!--  --> 
<!--    Favicons--> 
<!--    =============================================-->
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
<link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
<meta name="theme-color" content="#ffffff">
<!--  --> 
<!--    Stylesheets--> 
<!--    =============================================--> 
<!-- 追加 stylesheet and color file-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
<!-- Default stylesheets-->
<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!--stylesheets-->
<link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">
<link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
<link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Main stylesheet and color file-->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W5365MR6');</script>
<!-- End Google Tag Manager -->   
</head>
<body>
<header>
  <div class="znav-container znav-white znav-freya znav-fixed" id="znav-container">
    <div class="container">
      <nav class="navbar navbar-expand-lg"><a class="navbar-brand overflow-hidden pr-3" href="index.html"><img src="assets/images/logo.svg" alt="リスタート" width="150"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger hamburger--emphatic">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav fs-0">
            <li><a href="JavaScript:void(0)">HOME</a></li>
            <li><a href="JavaScript:void(0)">当社の強み</a></li>
            <li><a href="JavaScript:void(0)">サービス内容</a>
              <ul class="dropdown">
                <li><a href="JavaScript:void(0)">ご利用の流れ</a></li>
                <li><a href="about.html">退職代行サポート</a></li>
                <li><a href="recognition.html">転職サポート</a></li>
              </ul>
            </li>
            <li><a href="JavaScript:void(0)">料金プラン</a></li>
            <li><a href="JavaScript:void(0)">よくある質問</a></li>
            <li><a href="JavaScript:void(0)">会社概要</a></li>
            <li><a href="JavaScript:void(0)">ご相談</a></li>
          </ul>
          <ul class="navbar-nav fs-0 ml-lg-auto">
            <li class="text-center"><a class="pl-3 pl-lg-1 d-inline-block" href="#"><span class="fa fa-facebook"></span></a><a class="pl-3 pl-lg-1 d-inline-block" href="#"><span class="fa fa-twitter"></span></a><a class="pl-3 pl-lg-1 d-inline-block" href="#"><span class="fa fa-instagram"></span></a><a class="pl-3 pl-lg-1 d-inline-block pr-0" href="#"><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<div class="loading" id="preloader">
  <div class="h-100 d-flex align-items-center justify-content-center">
    <div class="loader-box">
      <div class="loader"></div>
    </div>
  </div>
</div>
<section class="py-9 overflow-hidden text-center">
  <div class="background-holder overlay overlay-1 parallax" style="background-image:url(assets/images/qa/projects_header.jpg);"> </div>
  <!--/.background-holder-->
  <div class="container">
    <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
      <div class="col">
        <div class="overflow-hidden">
          <h1 class="fs-5 fs-sm-6 color-white mb-3" data-zanim='{"delay":0}'>よくある質問</h1>
        </div>
        <div class="overflow-hidden">
          <p class="fs-2 fw-300 ls color-8 text-uppercase" data-zanim='{"delay":0.1}'>FAQ</p>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<main class="container py-5">
  <h2 class="mb-4">入力内容のご確認</h2>
  <p>以下の内容で送信します。問題なければ送信ボタンを押してください。</p>
  <form action="send.php" method="post">
    <dl class="row">
      <dt class="col-sm-3">お名前</dt>
      <dd class="col-sm-9">
        <?= htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') ?>
      </dd>
      <dt class="col-sm-3">ふりがな</dt>
      <dd class="col-sm-9">
        <?= htmlspecialchars($_POST['kana'], ENT_QUOTES, 'UTF-8') ?>
      </dd>
      <dt class="col-sm-3">メールアドレス</dt>
      <dd class="col-sm-9">
        <?= htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') ?>
      </dd>
      <dt class="col-sm-3">電話番号</dt>
      <dd class="col-sm-9">
        <?= htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') ?>
      </dd>
      <dt class="col-sm-3">お問い合わせ内容</dt>
      <dd class="col-sm-9">
        <?= nl2br(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8')) ?>
      </dd>
    </dl>
    <?php foreach ($_POST as $key => $value): ?>
    <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
    <?php endforeach; ?>
    <div class="mt-4">
      <button type="submit" class="btn btn-primary">送信</button>
      <a href="form.html" class="btn btn-secondary">戻る</a> </div>
  </form>
</main>
<footer class="bg-secondary pt-5 pb-4 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h3 class="fs-1 text-white">看護師の退職代行と転職サポート</h3>
        <address class="mb-4 text-white">
        株式会社ポエンテ リスタート事業部<br>
        〒195-0063<br>
        東京都町田市野津田町1399番地2<br>
        </address>
      </div>
      <!--footerリンク-->
      <div class="col-md-2 col-sm-6 mb-4">
        <h5 class="fw-bold mb-3 text-white">サービス</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="ryokin.html" class="nav-link p-0 text-white">料金プラン</a></li>
          <li class="nav-item mb-2"><a href="nagare.html" class="nav-link p-0 text-white">ご利用の流れ</a></li>
          <li class="nav-item mb-2"><a href="tenshoku.html" class="nav-link p-0 text-white">転職サポート</a></li>
          <li class="nav-item mb-2"><a href="taishoku.html" class="nav-link p-0 text-white">退職代行サポート</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">ご相談</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6 mb-4">
        <h5 class="fw-bold mb-3 text-white">企業情報</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="tuyomi.html" class="nav-link p-0 text-white">当社の強み</a></li>
          <li class="nav-item mb-2"><a href="company.html" class="nav-link p-0 text-white">会社概要</a></li>
          <li class="nav-item mb-2"><a href="privacypolicy.html" class="nav-link p-0 text-white">プライバシーポリシー</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-12 mb-4">
        <h5 class="fw-bold mb-3 text-white">お役立ち</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="q&a.html" class="nav-link p-0 text-white">よくある質問</a></li>
        </ul>
      </div>
      <!--footerリンク-->
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-center pt-4 mt-7 border-top">
      <p class="text-center text-white">&copy; 2025 株式会社ポエンテ. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<!--/.container--> 

<!--  --> 
<!--    JavaScripts--> 
<!--    =============================================--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> 
<script src="assets/lib/jquery/dist/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script> 
<script src="assets/lib/jquery-menu-aim/jquery.menu-aim.js"></script> 
<script src="assets/lib/gsap/src/minified/TweenMax.min.js"></script> 
<script src="assets/lib/CustomEase.min.js"></script> 
<script src="assets/js/config.js"></script> 
<script src="assets/lib/rellax/rellax.min.js"></script> 
<script src="assets/js/zanimation.js"></script> 
<script src="assets/js/inertia.js"></script> 
<script src="assets/lib/flexslider/jquery.flexslider-min.js"></script> 
<script src="assets/js/core.js"></script> 
<script src="assets/js/main.js"></script> 
<script src="assets/js/animation.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
<script>
    AOS.init();
  </script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5365MR6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>