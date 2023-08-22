document.addEventListener("DOMContentLoaded", function () {
  const pageTitleElements = document.querySelectorAll(".page-title");
  
  pageTitleElements.forEach((element, index) => {
    // 各span要素に対して、40ms * インデックス分の遅延を設定
    const spans = element.querySelectorAll("span");
    spans.forEach((span, idx) => {
      const delay = 40 * idx + 'ms';
      span.style.setProperty('--delay', delay);
    });

    // openPageTitleクラスを追加
    element.classList.add("openPageTitle");
  });
});
