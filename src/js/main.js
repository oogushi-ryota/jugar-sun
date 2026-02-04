// === ユーティリティライブラリ読み込み ===
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { setHeaderHeight } from "./utils/headerHeightUtils.js";
import { setFooterHeight } from "./utils/footerHeightUtils.js";
import { initAccordion } from "./utils/accordionUtils.js";
import { initSlider } from "./utils/slickslideUtils.js";
import { initAnchorSmoothScroll, initTopHeaderToggleSP, initFooterBackToTop } from "./utils/scrollUtils.js";
import { preventEnterSubmit, disableSelectPlaceholder } from "./utils/formUtils.js";

// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  initHamburgerMenu();          // ← ハンバーガーメニュー
  setHeaderHeight();            // ← ヘッダーの高さを取得
  setFooterHeight();            // ← フッターの高さを取得
  initTopHeaderToggleSP();      // ← ヘッダーフェードイン
  initSlider();                 // ← スリックスライダー
  initAccordion()               // ← アコーディオン
  initAnchorSmoothScroll();     // ← スムーススクロール
  initFooterBackToTop();        // ← ページトップに戻る
  preventEnterSubmit();
  disableSelectPlaceholder();
});