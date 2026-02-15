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
          <div class="p-contact-form__form">
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="category">
                お問い合わせ項目
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__input-area p-contact-form__select-wrap">
                <select name="category" class="p-contact-form__default" id="category" required aria-required="true">
                  <option value="" selected='selected'>以下から選択してください</option>
                  <option value="小学1年生">選択肢①</option>
                  <option value="小学2年生">選択肢②</option>
                  <option value="小学3年生">選択肢③</option>
                  <option value="小学4年生">選択肢④</option>
                </select>
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="your-name">
                お名前
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__input-area">
                <input placeholder="お名前" size="40" class="p-contact-form__default" id="your-name" type="text" name="your-name" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="company">会社名</label>
              <div class="p-contact-form__input-area">
                <input placeholder="会社名" size="40" class="p-contact-form__default" id="company" type="text" name="company">
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="email">
                メールアドレス
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__input-area">
                <input placeholder="メールアドレス" size="40" class="p-contact-form__default" id="email" type="text" name="email" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="tel">
                電話番号
              </label>
              <div class="p-contact-form__input-area">
                <input placeholder="電話番号" size="40" class="p-contact-form__default" id="tel" type="text" name="tel">
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="trigger">
                弊社を知ったきっかけ
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__input-area p-contact-form__select-wrap">
                <select name="trigger" class="p-contact-form__default" id="trigger" required aria-required="true">
                  <option value="" selected='selected'>以下から選択してください</option>
                  <option value="小学1年生">選択肢①</option>
                  <option value="小学2年生">選択肢②</option>
                  <option value="小学3年生">選択肢③</option>
                  <option value="小学4年生">選択肢④</option>
                </select>
              </div>
            </div>
            <div class="p-contact-form__form-blk">
              <label class="p-contact-form__label" for="your-inquiry">お問い合わせ内容</label>
              <div class="p-contact-form__input-area">
                <textarea placeholder="お問い合わせ内容を入力ください。" name="your-inquiry" class="p-contact-form__default p-contact-form__default--txtarea" id="your-inquiry" rows="10"></textarea>
              </div>
            </div>
            <div class="p-contact-form__btn">
              <input type="submit" name="send" value="送信する" class="p-contact-form__btn-input">
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>