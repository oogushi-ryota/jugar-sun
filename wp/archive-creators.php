<?php
/*
Template Name: クリエイター一覧
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-creators">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-CREATORS</span>
            <span class="c-under-ttl__lead">PARTNER <br class="sp">CREATORS</span>
          </h1>
        </div>
      </section>

      <section class="p-creators-cont">
        <div class="c-inner">
          <ul class="p-creators-cont__list">
            <li class="p-creators-cont__item">
              <figure class="p-creators-cont__thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators_sample.jpg" alt="サムネイル" class="" width="360" height="360">
              </figure>
              <ul class="p-creators-cont__sns-list">
                <li class="p-creators-cont__sns-item">
                  <a href="" target="_blank" class="p-creators-cont__sns-link">
                    <figure class="p-creators-cont__sns-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon01.svg" alt="youtube" class="" width="48" height="48">
                    </figure>
                  </a>
                </li>
                <li class="p-creators-cont__sns-item">
                  <a href="" target="_blank" class="p-creators-cont__sns-link">
                    <figure class="p-creators-cont__sns-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon02.svg" alt="Instagram" class="" width="48" height="48">
                    </figure>
                  </a>
                </li>
                <li class="p-creators-cont__sns-item">
                  <a href="" target="_blank" class="p-creators-cont__sns-link">
                    <figure class="p-creators-cont__sns-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon03.svg" alt="TikTok" class="" width="48" height="48">
                    </figure>
                  </a>
                </li>
                <li class="p-creators-cont__sns-item">
                  <a href="" target="_blank" class="p-creators-cont__sns-link">
                    <figure class="p-creators-cont__sns-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon04.svg" alt="X" class="" width="48" height="48">
                    </figure>
                  </a>
                </li>
              </ul>
              <p class="p-creators-cont__name">漆ちゃんfamily</p>
            </li>
          </ul>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>
      
    </div>
  </main>

  <?php get_footer(); ?>