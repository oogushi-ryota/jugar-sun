// ▼スムーススクロール処理
export function initAnchorSmoothScroll() {
  const links = document.querySelectorAll('a[href*="#"]');
  let headerHeight = 22;

  // デバイス幅が375px以下の場合は7.1rem（通常は0rem）
  if (window.innerWidth <= 375) {
    headerHeight = 13;
  }

  links.forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      const targetId = href.split("#")[1];
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        e.preventDefault();

        // ヘッダー高さをrem単位で調整してスクロール
        const fontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
        const offset = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight * fontSize;

        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });
      }
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