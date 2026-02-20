<?php
/*
Template Name: トップページ
*/
?>
  <?php get_header('front'); ?>

  <main class="l-main">
    <div class="p-top">
      <div class="p-top-fv">
        <video class="p-top-fv__video pc" src="<?php echo get_template_directory_uri(); ?>/assets/movie/top-mv.mp4" autoplay muted loop playsinline></video>
        <video class="p-top-fv__video sp" src="<?php echo get_template_directory_uri(); ?>/assets/movie/sp/top-mv.mp4" autoplay muted loop playsinline></video>
      </div>

      <?php get_template_part( 'parts/header-front' ); ?>

      <section class="p-top-about">
        <div class="c-inner">
          <div class="p-top-about__cont">
            <span class="c-top-secttl__ja c-top-secttl__ja--org">ABOUT</span>
            <h2 class="p-top-about__ttl">
              <span class="p-top-about__ttl-ja">
                誰もが煌めきを<br>
                感じられる世界の実現
              </span>
              <span class="p-top-about__ttl-en">Creating a world where everyone can feel sparkle.</span>
            </h2>
            <p class="p-top-about__txt">
              日々様々なモノが生まれては消えていく、“正解”のない まさに激動の時代。<br>
              Jugar Sunの由来にもなっている“太陽”は、平等に存在する“希望”の光です。<br>
              「あなた独自の“太陽”を見つけて欲しい」という強い願いを込めて私たちはエンターテイメントの持つ力を信じて、新しい事に挑戦し続けます。
            </p>
            <div class="p-top-about__btn">
              <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="c-btn">
                <span class="c-btn__txt c-btn__txt--bk">DETAIL</span>
                <span class="c-btn__obj c-btn__obj--bk">
                  <svg width="21" height="6" viewBox="0 0 21 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 5.33398H19L14.5 0.333984" stroke="#453E3E"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-news">
        <div class="c-inner">
          <div class="p-top-news__wrap">
            <h2 class="c-top-secttl">
              <span class="c-top-secttl__en c-top-secttl__en--bk">NEWS</span>
              <span class="c-top-secttl__ja c-top-secttl__ja--org">お知らせ</span>
            </h2>
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-btn">
              <span class="c-btn__txt c-btn__txt--org">VIEW ALL</span>
              <span class="c-btn__obj c-btn__obj--org">
                <svg width="21" height="6" viewBox="0 0 21 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 5.33398H19L14.5 0.333984" stroke="#FC6847"/>
                </svg>
              </span>
            </a>
          </div>

          <?php
          $news_query = new WP_Query([
            'post_type'      => 'news',
            'posts_per_page' => 10, // トップページでは最大10件
          ]);
          ?>
          <?php if ( $news_query->have_posts() ) : ?>

          <div class="p-top-news__slider js-slider">
            <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
              <div class="p-top-news__slider-item">
                <a href="<?php the_permalink(); ?>" class="p-top-news__link">
                  <figure class="p-top-news__thumb">
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
                  <time datetime="<?php echo get_the_date('c'); ?>" class="p-top-news__time"><?php echo get_the_date('Y.m.d'); ?></time>
                  <p class="p-top-news__ttl"><?php the_title(); ?></p>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
          <?php else : ?>
            <p class="p-top-news__note">ニュースはまだありません。</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <div class="p-top-news__slider-progress js-slider-progress">
            <div class="p-top-news__slider-progress-bar js-slider-progress__bar"></div>
          </div>
        </div>
      </section>

      <section class="p-top-business" id="service">
        <div class="c-inner">
          <h2 class="c-top-secttl">
            <span class="c-top-secttl__en c-top-secttl__en--bk">BUSINESS</span>
            <span class="c-top-secttl__ja c-top-secttl__ja--org">ビジネス</span>
          </h2>
          <div class="p-top-business__lead">
            <h3 class="p-top-business__lead-ttl">エンターテイメントを軸としたトータルマーケティングカンパニー</h3>
            <p class="p-top-business__lead-txt">我々が提供する3つの強みと4つのソリューション</p>
          </div>
          <div class="p-top-business__wrap">
            <div class="p-top-business__obj">
              <figure class="p-top-business__obj-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/feature_obj.svg" alt="" width="300" height="298" loading="lazy">
              </figure>
            </div>
            <ol class="p-top-business__feature-list">
              <li class="p-top-business__feature-item">
                <details class="p-top-business__details js-accordion">
                  <summary class="p-top-business__summary js-summary">
                    <h4 class="p-top-business__feature-ttl">
                      <span class="p-top-business__feature-num">01</span>
                      クリエイティブなコンテンツ制作力
                    </h4>
                    <span class="p-top-business__summary-btn"></span>
                  </summary>
                  <p class="p-top-business__feature-txt js-accordion-details">
                    エンターテイメント業界の知見を活かした高品質なコンテンツを制作。<br>
                    視聴者の心を掴むストーリーやビジュアルを提供。
                  </p>
                </details>
              </li>
              <li class="p-top-business__feature-item">
                <details class="p-top-business__details js-accordion">
                  <summary class="p-top-business__summary js-summary">
                    <h4 class="p-top-business__feature-ttl">
                      <span class="p-top-business__feature-num">02</span>
                      マルチプラットフォーム展開のノウハウ
                    </h4>
                    <span class="p-top-business__summary-btn"></span>
                  </summary>
                  <p class="p-top-business__feature-txt js-accordion-details">
                    YouTubeやTikTok等複数プラットフォームに対応したマーケティング戦略を展開。<br>
                    プラットフォームごとの特性を最大限に活かしたプロモーションを実施可能。
                  </p>
                </details>
              </li>
              <li class="p-top-business__feature-item">
                <details class="p-top-business__details js-accordion">
                  <summary class="p-top-business__summary js-summary">
                    <h4 class="p-top-business__feature-ttl">
                      <span class="p-top-business__feature-num">03</span>
                      インフルエンサーとの強固なネットワーク
                    </h4>
                    <span class="p-top-business__summary-btn"></span>
                  </summary>
                  <p class="p-top-business__feature-txt js-accordion-details">自社タレントの紹介を優先するプロダクションでは無くクリエイターとの関係性が強固ではないエージェント型でも無い両方の強みを兼ね備えたハイブリッド型。</p>
                </details>
              </li>
            </ol>
          </div>
          <ul class="p-top-business__list">
            <li class="p-top-business__item">
              <a href="<?php echo esc_url( home_url( '/marketing/' ) ); ?>" class="p-top-business__link">
                <picture class="l-footer__logo-img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img01.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img01.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img01.jpg" alt="マーケティング" width="380" height="507" loading="lazy">
                </picture>
              </a>
            </li>
            <li class="p-top-business__item">
              <a href="<?php echo esc_url( home_url( '/produce/' ) ); ?>" class="p-top-business__link">
                <picture class="l-footer__logo-img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img02.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img02.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img02.jpg" alt="マーケティング" width="380" height="507" loading="lazy">
                </picture>
              </a>
            </li>
            <li class="p-top-business__item">
              <a href="<?php echo esc_url( home_url( '/production/' ) ); ?>" class="p-top-business__link">
                <picture class="l-footer__logo-img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img03.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/sp/business_img03.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/business/business_img03.jpg" alt="マーケティング" width="380" height="507" loading="lazy">
                </picture>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="p-top-creator">
        <a href="<?php echo esc_url( home_url( '/creators/' ) ); ?>" class="p-top-creator__link">
          <picture class="p-top-creator__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/creator/creator.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/creator/creator.jpg" alt="クリエイター" width="1440" height="943" loading="lazy">
          </picture>
        </a>
      </section>

      <section class="p-top-works">
        <div class="c-inner">
          <div class="p-top-news__wrap">
            <h2 class="c-top-secttl">
              <span class="c-top-secttl__en c-top-secttl__en--bk">WORKS</span>
              <span class="c-top-secttl__ja c-top-secttl__ja--org">実績</span>
            </h2>
            <a href="#" class="c-btn">
              <span class="c-btn__txt c-btn__txt--org">VIEW ALL</span>
              <span class="c-btn__obj c-btn__obj--org">
                <svg width="21" height="6" viewBox="0 0 21 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 5.33398H19L14.5 0.333984" stroke="#FC6847"/>
                </svg>
              </span>
            </a>
          </div>
          <ul class="p-top-works__list">
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img01.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img02.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img03.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img04.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img05.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img06.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img07.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img07.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img08.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img08.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
            <li class="p-top-works__item">
              <picture class="p-top-works__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img09.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works/works_img09.jpg" alt="サムネイル" width="360" height="210" loading="lazy">
              </picture>
            </li>
          </ul>
        </div>
      </section>

      <section class="p-top-recruit">
        <a href="https://www.wantedly.com/companies/company_4465451" class="p-top-recruit__link" target="_blank">
          <picture class="p-top-recruit__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit.jpg" alt="採用募集中" width="1440" height="810" loading="lazy">
          </picture>
        </a>
      </section>

      <section class="p-top-company">
        <div class="c-inner">
          <div class="p-top-company__wrap">
            <picture class="p-top-company__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/company/company.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/company/company.jpg" alt="" width="470" height="626" loading="lazy">
            </picture>
            <div class="p-top-company__txtblk">
              <h2 class="c-top-secttl">
                <span class="c-top-secttl__en c-top-secttl__en--wt">COMPANY</span>
                <span class="c-top-secttl__ja c-top-secttl__ja--wt">私たちについて</span>
              </h2>
              <div class="p-top-company__btn">
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="c-btn">
                  <span class="c-btn__txt c-btn__txt--wt">VIEW ALL</span>
                  <span class="c-btn__obj c-btn__obj--wt">
                    <svg width="21" height="6" viewBox="0 0 21 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 5.33398H19L14.5 0.333984" stroke="#FFF"/>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/contact' ); ?>

      <section class="p-top-client">
        <div class="c-inner">
          <h2 class="c-top-secttl">
            <span class="c-top-secttl__en c-top-secttl__en--bk">OUR CLIENTS</span>
            <span class="c-top-secttl__ja c-top-secttl__ja--org">お取引先企業</span>
          </h2>
        </div>
        <div class="p-top-client__marquee-area">
          <div class="p-top-client__top-marquee">
            <div class="c-marquee c-marquee--client-top">
              <div class="c-marquee__blk">
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
              </div>
              <div class="c-marquee__blk">
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-top">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_top.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
              </div>
            </div>
          </div>
          <div class="p-top-client__bottom-marquee">
            <div class="c-marquee c-marquee--client-bottom">
              <div class="c-marquee__blk">
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
              </div>
              <div class="c-marquee__blk">
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
                <picture class="c-marquee__img c-marquee__img--client-bottom">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/client/marquee_bottom.png" alt="Jugar Sun" width="1920" height="121" loading="lazy">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>