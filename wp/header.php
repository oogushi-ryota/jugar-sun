<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">

  <!-- フォント読み込み -->
  <script>
    (function(d) {
      var config = {
        kitId: 'shv1ewg',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__wrap">
        <h1 class="l-header__h1">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="元城アカデミー" width="386" height="80">
          </a>
        </h1>
        <div class="l-header__hamburger js-nav-btn">
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
        </div>
        <div class="l-header__cont js-nav">
          <nav class="l-header__nav">
            <ul class="l-header__nav-list">
              <li class="l-header__nav-item">
                <a href="" class="l-header__nav-link">メール</a>
              </li>
              <li class="l-header__nav-item">
                <a href="tel:0535434999" class="l-header__nav-link">お電話</a>
              </li>
              <li class="l-header__nav-item">
                <a href="https://line.me/R/ti/p/@479fhrdb" class="l-header__nav-link" target="_blank" rel="noopener noreferrer">公式ライン</a>
              </li>
            </ul>
          </nav>
          <div class="l-header__contact">
            <span class="l-header__contact-txt">お問合せはお電話・メール・公式LINEから!</span>
            <a href="tel:0535434999" class="l-header__tel">053-543-4999</a>
          </div>
          <nav class="l-header__menu sp">
            <ul class="l-header__menu-list">
              <li class="l-header__menu-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__menu-link">ホーム</a>
              </li>
              <li class="l-header__menu-item">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-header__menu-link">塾・講師紹介</a>
              </li>
              <li class="l-header__menu-item">
                <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="l-header__menu-link">コース・料金</a>
              </li>
              <li class="l-header__menu-item">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-header__menu-link">お問合せ・Q&A</a>
              </li>
              <li class="l-header__menu-item">
                <a href="<?php echo esc_url( home_url( '/column/' ) ); ?>" class="l-header__menu-link">元アカ コラム</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>