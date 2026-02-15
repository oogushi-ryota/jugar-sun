<?php
/*
Template Name: ニュース詳細
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-news">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-お知らせ</span>
            <span class="c-under-ttl__lead">NEWS</span>
          </h1>
        </div>
      </section>

      <section class="p-news-details">
        <div class="p-news-details__inner">
          <div class="p-news-details__head">
            <time datetime="2024-12-02" class="p-news-details__time">2024.12.02</time>
            <h2 class="p-news-details__ttl">弊社の感動とおもしろいが詰まった沖縄合宿を紹介します！</h2>
          </div>
          <figure class="p-news-details__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_sample.jpg" alt="サムネイル" width="1000" height="523">
          </figure>
          <div class="p-news-details__cont">
            <?php the_content(); ?>
          </div>
          <div class="p-news-details__btn">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-btn">
              <span class="c-btn__txt c-btn__txt--org">PAGE BACK</span>
              <span class="c-btn__obj c-btn__obj--org">
                <svg width="21" height="6" viewBox="0 0 21 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 5.33398H19L14.5 0.333984" stroke="#FC6847"/>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>