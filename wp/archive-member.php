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
          <?php if ( have_posts() ) : ?>
          <ul class="p-member-cont__list">
            <?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'parts/thumbs-member' ); ?>
						<?php endwhile; ?>
          </ul>
          <?php else : ?>
						<p class="p-news-archive__note">メンバーはまだありません。</p>
					<?php endif; ?>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>