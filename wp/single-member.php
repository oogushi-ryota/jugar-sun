<?php
/*
Template Name: メンバー詳細
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-member">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-Jugar Sunメンバー詳細</span>
            <?php if ($details_ttl = SCF::get('details-ttl')) : ?>
              <span class="p-member__ttl c-under-ttl__lead"><?php echo esc_html($details_ttl); ?></span>
            <?php endif; ?>
          </h1>
        </div>
      </section>

      <section class="p-member-details">
        <div class="c-inner">
          <div class="p-member-details__profile">
            <div class="p-member-details__profile-imgarea">
              <figure class="p-member-details__profile-img">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('full', [
                    'alt'   => get_the_title(),
                    'width' => 500,
                    'height' => 500,
                  ]); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/default-thumb02.jpg" alt="サムネイル" width="500" height="500">
                <?php endif; ?>
              </figure>
              <?php if ($second_img = SCF::get('second-img')) : ?>
                <figure class="p-member-details__profile-img pc">
                  <?php echo wp_get_attachment_image(
                    $second_img,
                    'full',
                    false,
                    [
                      'class'   => '',
                      'loading' => 'lazy',
                      'alt'     => get_the_title()
                    ]
                  ); ?>
                </figure>
              <?php endif; ?>
            </div>
            <div class="p-member-details__profile-texarea">
              <div class="p-member-details__profile-head">
                <div class="p-member-details__profile-name-blk">
                  <h2 class="p-member-details__profile-name-ja"><?php the_title(); ?></h2>
                  <?php if ($name_en = SCF::get('name-en')) : ?>
                    <span class="p-member-details__profile-name-en"><?php echo esc_html($name_en); ?></span>
                  <?php endif; ?>
                  <?php if ($position = SCF::get('position')) : ?>
                    <span class="p-member-details__profile-name-role">
                      <?php echo esc_html($position); ?>
                    </span>
                  <?php endif; ?>
                </div>
                <ul class="p-member-details__profile-sns-list">
                  <?php if ($youtube = SCF::get('youtube-url')) : ?>
                    <li class="p-member-details__profile-sns-item">
                      <a href="<?php echo esc_url($youtube); ?>" class="p-member-details__profile-sns-link" target="_blank">
                        <figure class="p-member-details__profile-sns-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon01.svg" alt="youtube" class="" width="48" height="48">
                        </figure>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($instagram = SCF::get('instagram-url')) : ?>
                    <li class="p-member-details__profile-sns-item">
                      <a href="<?php echo esc_url($instagram); ?>" class="p-member-details__profile-sns-link" target="_blank">
                        <figure class="p-member-details__profile-sns-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon02.svg" alt="Instagram" class="" width="48" height="48">
                        </figure>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($tiktok = SCF::get('tiktok-url')) : ?>
                    <li class="p-member-details__profile-sns-item">
                      <a href="<?php echo esc_url($tiktok); ?>" class="p-member-details__profile-sns-link" target="_blank">
                        <figure class="p-member-details__profile-sns-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon03.svg" alt="TikTok" class="" width="48" height="48">
                        </figure>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if ($x = SCF::get('x-url')) : ?>
                    <li class="p-member-details__profile-sns-item">
                      <a href="<?php echo esc_url($x); ?>" class="p-member-details__profile-sns-link" target="_blank">
                        <figure class="p-member-details__profile-sns-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon04.svg" alt="X" class="" width="48" height="48">
                        </figure>
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="p-member-details__profile-feature">
                <h3 class="p-member-details__profile-feature-ttl">特技・特徴</h3>
                <?php if ($skills = SCF::get('skills')) : ?>
                  <ul class="p-member-details__profile-feature-list">
                    <?php foreach ($skills as $skill) : ?>
                      <?php if (!empty($skill['skill-item'])) : ?>
                        <li class="p-member-details__profile-feature-item">
                          <?php echo esc_html($skill['skill-item']); ?>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>
              <div class="p-member-details__profile-motto">
                <h3 class="p-member-details__profile-motto-ttl">座右の銘</h3>
                <?php if ($motto = SCF::get('motto')) : ?>
                  <p class="p-member-details__profile-motto-txt">
                    <?php echo nl2br(esc_html($motto)); ?>
                  </p>
                <?php endif; ?>
              </div>
              <?php if ($graph = SCF::get('graph')) : ?>
                <figure class="p-member-details__profile-graph">
                  <?php echo wp_get_attachment_image(
                    $graph,
                    'full',
                    false,
                    [
                      'class'   => '',
                      'loading' => 'lazy',
                      'alt'     => get_the_title()
                    ]
                  ); ?>
                </figure>
              <?php endif; ?>
              <?php if ($second_img = SCF::get('second-img')) : ?>
                <figure class="p-member-details__profile-img sp">
                  <?php echo wp_get_attachment_image(
                    $second_img,
                    'full',
                    false,
                    [
                      'class'   => '',
                      'loading' => 'lazy',
                      'alt'     => get_the_title()
                    ]
                  ); ?>
                </figure>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>