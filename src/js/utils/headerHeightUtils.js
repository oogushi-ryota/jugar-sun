// ▼headerの高さを取得
export function setHeaderHeight(selector = '.l-header') {
  const header = document.querySelector(selector);
  if (!header) return;

  const update = () => {
    const height = header.offsetHeight;
    document.documentElement.style.setProperty(
      '--header-height',
      `${height}px`
    );
  };

  // 初期計測
  update();

  // リサイズ対応
  window.addEventListener('resize', update);
}
// ▲headerの高さを取得