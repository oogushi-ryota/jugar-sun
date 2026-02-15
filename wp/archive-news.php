<?php
/*
Template Name: ニュース一覧
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-news">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-お知らせ一覧</span>
            <span class="c-under-ttl__lead">NEWS</span>
          </h1>
        </div>
      </section>

      <section class="p-news-archive">
        <div class="c-inner">
          <ul class="p-news-archive__list">
            <li class="p-news-archive__item">
              <a href="" class="p-news-archive__link">
                <figure class="p-news-archive__thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample.jpg" alt="サムネイル" width="360" height="188">
                </figure>
                <time datetime="2024-12-02" class="p-news-archive__time">2024.12.02</time>
                <p class="p-news-archive__ttl">弊社の感動とおもしろいが詰まった沖縄合宿を紹介します！</p>
              </a>
            </li>
          </ul>

          <?php get_template_part( 'parts/pagination' ); ?>
          
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>