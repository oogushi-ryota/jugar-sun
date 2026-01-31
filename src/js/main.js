// === ユーティリティライブラリ読み込み ===
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { setHeaderHeight } from "./utils/headerHeightUtils.js";
import { setFooterHeight } from "./utils/footerHeightUtils.js";
import { initSwiper } from "./utils/swiperUtils";
import { initAnchorSmoothScroll } from "./utils/scrollUtils.js";
import { preventEnterSubmit, disableSelectPlaceholder } from "./utils/formUtils.js";

// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  initHamburgerMenu({           // ← ハンバーガーメニュー
    navSelector: ".js-nav",
    btnSelector: ".js-nav-btn",
    closeTargetSelector: ".g-nav__item a",
  });
  setHeaderHeight();       //ヘッダーの高さを取得
  setFooterHeight();       //フッターの高さを取得
  initSwiper();            //スワイパー

  initAnchorSmoothScroll();     // ← スムーススクロール
  preventEnterSubmit();
  disableSelectPlaceholder();
});