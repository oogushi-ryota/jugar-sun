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
          <?php if ( have_posts() ) : ?>
          <ul class="p-creators-cont__list">
            <?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'parts/thumbs-creators' ); ?>
						<?php endwhile; ?>
          </ul>
          <?php else : ?>
						<p class="p-news-archive__note">クリエイターはまだありません。</p>
					<?php endif; ?>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>
      
    </div>
  </main>

  <?php get_footer(); ?>