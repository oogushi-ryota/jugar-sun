<?php
/*
Template Name: お問い合わせ
*/
?>
  <?php get_header(); ?>

  <main class="l-main l-under-page">
    <div class="p-contact">
      <section class="c-under-mv">
        <div class="c-inner">
          <h1 class="c-under-ttl">
            <span class="c-under-ttl__sub">-お問い合わせ</span>
            <span class="c-under-ttl__lead">CONTACT</span>
          </h1>
        </div>
      </section>

      <section class="p-contact-form">
        <div class="p-contact-form__inner">
          <?php echo do_shortcode('[contact-form-7 id="a34ec21" title="お問い合わせ"]'); ?>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>