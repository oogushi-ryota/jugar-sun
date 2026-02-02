export const initSlider = () => {
  const $sliders = $('.js-slider');
  if (!$sliders.length) return;

  $sliders.each(function () {
    const $slider = $(this);
    const $progressBar = $slider
      .siblings('.js-slider-progress')
      .find('.js-slider-progress__bar');

    // slick 初期化
    $slider.slick({
      dots: false,
      arrows: false,
      infinite: false,
      slidesToScroll: 1,
      adaptiveHeight: false,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    // プログレス更新関数
    const updateProgress = (slick, nextSlide) => {
      if (!$progressBar.length) return;
      const totalPages = slick.slideCount - slick.options.slidesToShow + 1;
      const currentPage = Math.min(nextSlide + 1, totalPages);
      const progress = (currentPage / totalPages) * 100;
      $progressBar.css('width', progress + '%');
    };

    // labelwrap の高さを揃える関数
    const equalizeLabelHeights = () => {
      const $labels = $slider
        .find('.c-works-card__labelwrap')
        .filter(function () {
          return !$(this).closest('.slick-slide').hasClass('slick-cloned');
        });

      let maxHeight = 0;
      $labels.css('height', 'auto');

      $labels.each(function () {
        const h = $(this).outerHeight();
        if (h > maxHeight) maxHeight = h;
      });

      $labels.css('height', `${maxHeight}px`);
    };

    // slick 初期化後
    $slider.on('init', function (event, slick) {
      updateProgress(slick, 0); // ← 初期値をここで確実に反映
      equalizeLabelHeights();
    });

    // slick 初期化直後にも保険として一度呼ぶ
    const slickInstance = $slider.slick('getSlick');
    updateProgress(slickInstance, 0);

    // setPosition 時（リサイズなど）にも再計算
    $slider.on('setPosition', function () {
      equalizeLabelHeights();
    });

    // スライド切り替え時
    $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      updateProgress(slick, nextSlide);
    });

    // initイベント登録後にsetPositionを実行（順序修正）
    $slider.slick('setPosition');

    // 画像読み込み後にも再揃え
    $(window).on('load resize', equalizeLabelHeights);
  });
};