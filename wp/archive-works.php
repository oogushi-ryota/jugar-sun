<?php
/*
Template Name: 実績一覧
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-works">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-実績一覧</span>
            <span class="c-under-ttl__lead">WORKS</span>
          </h1>
        </div>
      </section>

      <section class="p-works-archive">
        <div class="c-inner">
          <?php if ( have_posts() ) : ?>
          <ul class="p-works-archive__list">
            <?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'parts/thumbs-works' ); ?>
						<?php endwhile; ?>
          </ul>
          <?php else : ?>
						<p class="p-works-archive__note">実績はまだありません。</p>
					<?php endif; ?>
          <?php get_template_part( 'parts/pagenation' ); ?>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>