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
          <?php if ( have_posts() ) : ?>
          <ul class="p-news-archive__list">
            <?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'parts/thumbs-news' ); ?>
						<?php endwhile; ?>
          </ul>
          <?php else : ?>
						<p class="p-news-archive__note">ニュースはまだありません。</p>
					<?php endif; ?>
          <?php get_template_part( 'parts/pagination' ); ?>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>