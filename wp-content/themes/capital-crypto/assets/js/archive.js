document.addEventListener("DOMContentLoaded", function () {
  const loadMoreBtn = document.getElementById("loadMorePost");

  // Получаем текущую страницу из URL (по умолчанию 1)
  const urlParams = new URLSearchParams(window.location.search);
  let currentPage = parseInt(urlParams.get("page")) || 1; // Страница по умолчанию 1

  if (loadMoreBtn) {
    loadMoreBtn.addEventListener("click", function () {
      const button = this;
      const category = button.dataset.category;

      // Получаем offset после того, как button уже определен
      let offset = parseInt(button.dataset.offset);

      button.textContent = "Загрузка...";

      fetch(ajax_params.ajax_url, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          action: "load_more_posts",
          offset: offset,
          category_id: category,
        }),
      })
        .then((response) => response.text())
        .then((data) => {
          if (data === "end") {
            button.remove(); // Удаляем кнопку, если больше нет контента
          } else {
            document
              .querySelector(".content__articles-list")
              .insertAdjacentHTML("beforeend", data);

            // Увеличиваем offset и обновляем data-offset
            offset += 3;
            button.dataset.offset = offset;
            button.textContent = "Показать еще";

            // Обновляем URL без перезагрузки страницы
            currentPage++;
            window.history.pushState(null, null, `?page=${currentPage}`);
          }
        })
        .catch((error) => {
          console.error("Ошибка:", error);
          button.textContent = "Ошибка, попробуйте снова";
        });
    });
  }
});
