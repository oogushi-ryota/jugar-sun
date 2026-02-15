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
            <span class="p-member__ttl c-under-ttl__lead">誰もが認める遊びのファンタジスタ</span>
          </h1>
        </div>
      </section>

      <section class="p-member-details">
        <div class="c-inner">
          <div class="p-member-details__profile">
            <div class="p-member-details__profile-imgarea">
              <figure class="p-member-details__profile-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member_sample.jpg" alt="サムネイル" width="500" height="500">
              </figure>
              <figure class="p-member-details__profile-img pc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member_sample02.jpg" alt="サムネイル" width="500" height="500" loading="lazy">
              </figure>
            </div>
            <div class="p-member-details__profile-texarea">
              <div class="p-member-details__profile-head">
                <div class="p-member-details__profile-name-blk">
                  <h2 class="p-member-details__profile-name-ja">澤田享佑</h2>
                  <span class="p-member-details__profile-name-en">Kyousuke Sawada</span>
                  <span class="p-member-details__profile-name-role">代表取締役CEO</span>
                </div>
                <ul class="p-member-details__profile-sns-list">
                  <li class="p-member-details__profile-sns-item">
                    <a href="" class="p-member-details__profile-sns-link" target="_blank">
                      <figure class="p-member-details__profile-sns-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon01.svg" alt="youtube" class="" width="48" height="48">
                      </figure>
                    </a>
                  </li>
                  <li class="p-member-details__profile-sns-item">
                    <a href="" class="p-member-details__profile-sns-link" target="_blank">
                      <figure class="p-member-details__profile-sns-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creators/sns_icon02.svg" alt="Instagram" class="" width="48" height="48">
                      </figure>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="p-member-details__profile-feature">
                <h3 class="p-member-details__profile-feature-ttl">特技・特徴</h3>
                <ul class="p-member-details__profile-feature-list">
                  <li class="p-member-details__profile-feature-item">ビジネス！</li>
                  <li class="p-member-details__profile-feature-item">アソビ！</li>
                  <li class="p-member-details__profile-feature-item">ADHA</li>
                  <li class="p-member-details__profile-feature-item">金髪5年目</li>
                  <li class="p-member-details__profile-feature-item">海外放浪癖</li>
                </ul>
              </div>
              <div class="p-member-details__profile-motto">
                <h3 class="p-member-details__profile-motto-ttl">座右の銘</h3>
                <p class="p-member-details__profile-motto-txt">
                  If you can dream it, you can do it.<br>
                  -夢を見ることができれば、それは実現できる-
                </p>
              </div>
              <figure class="p-member-details__profile-graph">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/graph.jpg" alt="グラフ" width="580" height="363" loading="lazy">
              </figure>
              <figure class="p-member-details__profile-img sp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/member_sample02.jpg" alt="サムネイル" width="500" height="500" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

    </div>
  </main>

  <?php get_footer(); ?>