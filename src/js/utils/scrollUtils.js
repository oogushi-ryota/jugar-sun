// ▼スムーススクロール処理
export function initAnchorSmoothScroll() {
  /**
   * CSS変数から header 高さを取得
   */
  const getHeaderHeight = () => {
    const value = getComputedStyle(document.documentElement)
      .getPropertyValue('--header-height');
    return parseFloat(value) || 0;
  };

  /**
   * スクロール処理
   */
  const scrollToTarget = (target, smooth = true) => {
    if (!target) return;

    const headerHeight = getHeaderHeight();
    const offset =
      target.getBoundingClientRect().top +
      window.pageYOffset -
      headerHeight;

    window.scrollTo({
      top: offset,
      behavior: smooth ? 'smooth' : 'auto',
    });
  };

  /**
   * ① 別ページから /#xxx で遷移した場合
   */
  const pageHash = window.location.hash;
  if (pageHash) {
    const target = document.getElementById(pageHash.slice(1));
    if (target) {
      // ブラウザの自動アンカーを無効化
      history.replaceState(null, '', window.location.pathname);

      window.addEventListener('load', () => {
        scrollToTarget(target, true);
      });
    }
  }

  /**
   * ② 同一ページ内アンカー
   */
  document.querySelectorAll('a[href*="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const hash = link.hash;
      if (!hash) return;

      const target = document.getElementById(hash.slice(1));
      if (!target) return;

      e.preventDefault();
      scrollToTarget(target, true);
    });
  });
}
// ▲スムーススクロール処理

// ▼TOPページのヘッダーの表示制御
export function initTopHeaderToggleSP() {
  const fv = document.querySelector('.p-top-fv');
  const header = document.querySelector('.p-top-header');

  if (!fv || !header) return;

  // SPのみ
  const mq = window.matchMedia('(max-width: 767px)');
  if (!mq.matches) return;

  const onScroll = () => {
    const fvBottom = fv.getBoundingClientRect().bottom;

    if (fvBottom <= 0) {
      header.classList.add('is-fixed');
    } else {
      header.classList.remove('is-fixed');
    }
  };

  // 初期判定（リロード対策）
  onScroll();

  window.addEventListener('scroll', onScroll, { passive: true });
}
// ▲TOPページのヘッダーの表示制御

// ▼ページトップへ戻る
export function initFooterBackToTop({
  selector = '.js-back-btn',
} = {}) {
  const btn = document.querySelector(selector);
  if (!btn) return;

  btn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
}
// ▲ページトップへ戻る