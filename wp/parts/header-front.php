<header class="p-top-header">
  <div class="p-top-header__inner">
    <div class="p-top-header__wrap">
      <h1 class="p-top-header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-top-header__logo-link">
          <picture class="p-top-header__logo-img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="Jugar Sun" width="220" height="42">
          </picture>
        </a>
      </h1>
      <div class="p-top-header__hamburger sp js-nav-btn">
        <div class="p-top-header__line-wrap">
          <span class="p-top-header__hamburger-line"></span>
          <span class="p-top-header__hamburger-line"></span>
        </div>
        <span class="p-top-header__hamburger-txt">MENU</span>
      </div>
      <nav class="p-top-header__nav js-nav">
        <ul class="p-top-header__list">
          <li class="p-top-header__column-item">
            <ul class="p-top-header__column-list">
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">01</span>
                  TOP
                </a>
              </li>
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/#service' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">02</span>
                  SERVICE
                </a>
              </li>
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/creators/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">03</span>
                  CREATORS
                </a>
              </li>
            </ul>
          </li>
          <li class="p-top-header__column-item">
            <ul class="p-top-header__column-list">
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">04</span>
                  COMPANY
                </a>
              </li>
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">05</span>
                  NEWS
                </a>
              </li>
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/member/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">06</span>
                  MEMBER
                </a>
              </li>
            </ul>
          </li>
          <li class="p-top-header__column-item">
            <ul class="p-top-header__column-list">
              <li class="p-top-header__item">
                <a href="https://www.wantedly.com/companies/company_4465451" class="p-top-header__link" target="_blank">
                  <span class="p-top-header__item-num">07</span>
                  RECRUIT
                </a>
              </li>
              <li class="p-top-header__item">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="p-top-header__link">
                  <span class="p-top-header__item-num">08</span>
                  CONTACT
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>