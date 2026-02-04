import $ from "jquery";

// ▼ハンバーガーメニュー
export function initHamburgerMenu({
  navSelector = ".js-nav",
  btnSelector = ".js-nav-btn",
  closeTargetSelector = ".p-top-header__link, .l-header__link",
  extraTargets = [],
} = {}) {
  const $nav = $(navSelector);
  const $btn = $(btnSelector);
  const $body = $("body");
  const $closeTargets = $(closeTargetSelector);
  const $extraEls = extraTargets.map(sel => $(sel));

  function toggleMenu(isOpen) {
    const method = isOpen ? "addClass" : "removeClass";

    $nav[method]("is-active");
    $btn[method]("is-active");
    $body[method]("is-active");
    $extraEls.forEach($el => $el[method]("is-active"));
  }

  // ハンバーガーボタンクリック
  $btn.on("click", () => {
    const isOpening = !$nav.hasClass("is-active");
    toggleMenu(isOpening);
  });

  // メニュー内リンククリック時に閉じる
  $closeTargets.on("click", () => {
    toggleMenu(false);
  });
}
// ▲ハンバーガーメニュー