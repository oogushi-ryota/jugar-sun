// ▼全フォーム共通でEnter送信を防止
export function preventEnterSubmit({
  formSelector = ".mw_wp_form"
} = {}) {
  const init = () => {
    document
      .querySelectorAll(formSelector)
      .forEach(form => {
        form.addEventListener("keydown", e => {
          if (e.key === "Enter" && e.target.tagName !== "TEXTAREA") {
            e.preventDefault();
          }
        });
      });
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
}
// ▲全フォーム共通でEnter送信を防止

// ▼1つ目のoptionをdisabledにする
export function disableSelectPlaceholder({
  selectSelector = "#grade"
} = {}) {
  const init = () => {
    document.querySelectorAll(selectSelector).forEach(select => {
      if (!select || select.tagName !== "SELECT") return;

      const firstOption = select.options[0];
      if (!firstOption) return;

      // placeholder 的 option を選択不可に
      firstOption.disabled = true;
      firstOption.selected = true;
    });
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
}
// ▲1つ目のoptionをdisabledにする