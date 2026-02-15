<?php
/*
Template Name: メンバー一覧
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-member">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-Jugar Sunメンバー</span>
            <span class="c-under-ttl__lead">MEMBER</span>
          </h1>
        </div>
      </section>

      <section class="p-member-cont">
        <div class="c-inner">
          <ul class="p-member-cont__list">
            <li class="p-member-cont__item">
              <a href="" class="p-member-cont__link">
                <figure class="p-member-cont__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member_sample.jpg" alt="サムネイル" width="360" height="360">
                </figure>
                <span class="p-member-cont__name">澤田享佑</span>
                <span class="p-member-cont__role">代表取締役CEO</span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>