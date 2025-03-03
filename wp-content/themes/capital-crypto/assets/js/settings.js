const updateProfile = document.getElementById("updateProfile");

if (updateProfile) {
  updateProfile.addEventListener("submit", function (event) {
    event.preventDefault(); // Останавливаем стандартную отправку формы

    let formData = new FormData(this);
    formData.append("action", "update_user_profile");

    fetch(ajax_params.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json()) // Проверяем, если сервер отправляет JSON
      .then((data) => {
        console.log("Ответ сервера:", data);
        if (data.success) {
          alert(data.message);
        } else {
          alert("Ошибка: " + data.message);
        }
      })
      .catch((error) => console.error("Ошибка AJAX:", error));
  });
}
const editor = new EditorJS({
  /**
   * Меняем контейнер для редактора
   * Здесь вы можете указать ID или класс элемента, в котором будет отображаться редактор.
   * В нашем случае это контейнер с id="editorjs"
   */
  holder: "editorjs", // Убедитесь, что контейнер существует
  placeholder: "Нажмите / для выбора инструментаy!",

  /**
   * Конфигурация Editor.js
   */
  tools: {
    header: {
      class: Header,

      inlineToolbar: ["link"],
      config: {
        placeholder: "Введите заголовок",
      },
    },
    linkTool: {
      class: LinkTool,
      config: {
        endpoint: "http://localhost:8008/fetchUrl", // Your backend endpoint for url data fetching,
      },
    },
    checklist: {
      class: Checklist,
      inlineToolbar: true,
    },
    list: {
      class: EditorjsList,
      inlineToolbar: true,
      config: {
        defaultStyle: "unordered",
      },
    },
    image: {
      class: SimpleImage,
      inlineToolbar: true,
    },
    quote: {
      class: Quote,
      inlineToolbar: true,
    },
    image: {
      class: ImageTool,
      config: {
        endpoints: {
          byFile: "http://captital-crypto/wp-json/custom/v1/uploadFile", // Your backend file uploader endpoint
          byUrl: "http://localhost:8008/fetchUrl", // Your endpoint that provides uploading by Url
        },
        field: "file",
      },
    },
  },

  /**
   * Настройки сохранения данных
   */
  onReady: () => {
    console.log("Editor.js is ready to work!");
  },

  onChange: () => {
    console.log("Editor content changed!");
  },
});
