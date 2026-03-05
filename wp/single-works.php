<?php
/*
Template Name: 実績詳細
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-works">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-実績</span>
            <span class="c-under-ttl__lead">WORKS</span>
          </h1>
        </div>
      </section>

      <section class="p-works-details">
        <div class="p-works-details__inner">
          <div class="p-works-details__head">
            <time datetime="<?php echo get_the_date('c'); ?>" class="p-works-details__time"><?php echo get_the_date('Y.m.d'); ?></time>
            <h2 class="p-works-details__ttl"><?php the_title(); ?></h2>
          </div>
          <figure class="p-works-details__thumb">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('full', [
                'alt'   => get_the_title(),
                'width' => 440,
                'height' => 230,
              ]); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumb.jpg" alt="サムネイル" width="440" height="230">
            <?php endif; ?>
          </figure>
          <div class="p-works-details__cont">
            <?php the_content(); ?>

            <?php
            $movie_id = SCF::get('movie');
            $movie_url = $movie_id ? wp_get_attachment_url($movie_id) : '';
            ?>
            <?php if ($movie_url) : ?>
              <div class="p-works-details__video-blk">
                <video controls class="p-works-details__video">
                  <source src="<?php echo esc_url($movie_url); ?>" type="video/mp4">
                </video>
              </div>
            <?php endif; ?>

          </div>
          <div class="p-works-details__btn">
            <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="c-btn">
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