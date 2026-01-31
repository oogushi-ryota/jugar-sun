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