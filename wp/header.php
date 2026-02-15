<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">

  <!-- フォント読み込み -->
  <script>
    (function(d) {
      var config = {
        kitId: 'odd4ktx',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__wrap">
        <div class="l-header__logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo-link">
            <picture class="l-header__logo-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" type="image/webp">
              <img src="v/assets/img/common/logo.png" alt="Jugar Sun" width="220" height="42">
            </picture>
          </a>
        </div>
        <div class="l-header__hamburger js-nav-btn">
          <span class="l-header__hamburger-txt">MENU</span>
          <div class="l-header__line-wrap">
            <span class="l-header__hamburger-line"></span>
            <span class="l-header__hamburger-line"></span>
          </div>
        </div>
        <nav class="l-header__nav js-nav">
          <ul class="l-header__list">
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">01</span>
                TOP
              </a>
            </li>
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/#service' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">02</span>
                SERVICE
              </a>
            </li>
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/creators/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">03</span>
                CREATORS
              </a>
            </li>
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">04</span>
                COMPANY
              </a>
            </li>
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">05</span>
                NEWS
              </a>
            </li>
            <li class="l-header__item">
              <a href="<?php echo esc_url( home_url( '/member/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">06</span>
                MEMBER
              </a>
            </li>
            <li class="l-header__item">
              <a href="https://www.wantedly.com/companies/company_4465451" class="l-header__link" target="_blank">
                <span class="l-header__item-num">07</span>
                RECRUIT
              </a>
            </li>
            <li class="l-header__item l-header__item--contact">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-header__link">
                <span class="l-header__item-num">08</span>
                CONTACT
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>