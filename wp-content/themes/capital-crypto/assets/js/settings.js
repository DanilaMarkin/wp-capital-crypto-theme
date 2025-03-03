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
        .then(response => response.json()) // Проверяем, если сервер отправляет JSON
        .then(data => {
            console.log("Ответ сервера:", data);
            if (data.success) {
                alert(data.message);
            } else {
                alert("Ошибка: " + data.message);
            }
        })
        .catch(error => console.error("Ошибка AJAX:", error));
    });
}
