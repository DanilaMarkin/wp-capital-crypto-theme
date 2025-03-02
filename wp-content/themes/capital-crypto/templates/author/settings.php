<?php
custom_header();

$current_user = wp_get_current_user();
?>

<div class="layout container">
    <?php custom_sidemenu(); ?>

    <main class="content">
        <?php
        yoast_breadcrumb('<div class="custom-breadcrumbs">', '</div>');
        ?>
        <section class="settings">
            <h1><?= the_title(); ?></h1>
            <div class="settings__profile">
                <ul class="settings__list">
                    <li id="settingsProfile" class="settings__item">
                        <button class="settings__item-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/settings-profile.svg" alt="" class="settings__item-link-img">
                            <div class="settings__item-info">
                                <p>Профиль</p>
                                <span>Название, описание</span>
                            </div>
                        </button>
                    </li>
                    <li id="settingsGeneral" class="settings__item">
                        <button class="settings__item-link">
                            <img src="<?= get_template_directory_uri(); ?>/assets/icons/settings-general.svg" alt="" class="settings__item-link-img">
                            <div class="settings__item-info">
                                <p>Основные</p>
                                <span>Способы входа. удаление аккаунта</span>
                            </div>
                        </button>
                    </li>
                    <li class="settings__item">
                        <a href="<?= wp_logout_url(home_url()); ?>" class="settings__get-out">
                            Выйти из аккаунта
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="settings settings-general hidden">
            <div class="settings-general__header">
                <button class="backToMainSettingsWindow">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-settings.svg" alt="">
                </button>
                <p class="settings-general__header-title">Основные</p>
            </div>
            <div class="settings__profile">
                <ul class="settings__list">
                    <li class="settings-general__item">
                        <p>Почта</p>
                        <input type="text" value="cryptocapital@mail.ru">
                        <button class="settings-general__update">Изменить</button>
                    </li>
                    <li class="settings-general__item">
                        <p>Пароль</p>
                        <input type="text" value="cryptocapital@mail.ru">
                        <button class="settings-general__update">Изменить</button>
                    </li>
                    <li class="settings-general__item">
                        <p>Удалить аккаунт</p>
                        <button class="settings-general__update">Удалить</button>
                    </li>
                </ul>
            </div>
        </section>

        <section class="settings settings-profile hidden">
            <div class="settings-general__header">
                <button class="backToMainSettingsWindow">
                    <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-settings.svg" alt="">
                </button>
                <p class="settings-general__header-title">Профиль</p>
            </div>
            <?php
            $user_id = get_current_user_id();
            $avatar = get_user_meta($user_id, 'avatar_image', true) ?: get_template_directory_uri() . '/assets/images/add-avatart.webp';
            $cover = get_user_meta($user_id, 'author_banner', true) ?: get_template_directory_uri() . '/assets/images/add-banner.webp';
            ?>
            <form id="updateProfile" enctype="multipart/form-data" class="settings__profile">
                <ul class="profile__List settings__list">
                    <li class="profile__item">
                        <p>Обложка</p>
                        <label class="upload-label upload-label__banner">
                            <input type="file" accept="image/*" name="cover_image" class="upload-input" onchange="previewImage(event, 'cover-preview')">
                            <img src="<?= esc_url($cover); ?>" id="cover-preview" class="image-preview-banner" alt="Предпросмотр обложки">
                        </label>
                    </li>
                    <li class="profile__item">
                        <p>Аватарка</p>
                        <label class="upload-label upload-label__avatar">
                            <input type="file" accept="image/*" name="avatar_image" class="upload-input" onchange="previewImage(event, 'avatar-preview')">
                            <img src="<?= esc_url($avatar); ?>" id="avatar-preview" class="image-preview-avatar" alt="Предпросмотр аватарки">
                        </label>
                    </li>
                    <li class="profile__item">
                        <p>Имя</p>
                        <input type="text" name="first_name" value="<?= esc_attr(get_the_author_meta('first_name', $user_id)); ?>" class="profile__item-input">
                    </li>
                    <li class="profile__item">
                        <p>Описание</p>
                        <textarea name="description" placeholder="Пару слов о себе" class="profile__item-textarea"><?= esc_textarea(get_the_author_meta('description', $user_id)); ?></textarea>
                    </li>
                    <button type="submit" class="footer__menu-btn">Сохранить</button>
                </ul>
            </form>
        </section>
    </main>
</div>

<?php
custom_footer();
?>

<script>
    const settingsMainWindow = document.querySelector(".settings");
    const settingsGeneralWindow = document.querySelector(".settings-general");
    const settingsProfileWindow = document.querySelector(".settings-profile");

    const settingsGeneral = document.getElementById("settingsGeneral");
    const settingsProfile = document.getElementById("settingsProfile");
    const backToMainSettingsWindow = document.querySelectorAll(".backToMainSettingsWindow");

    settingsGeneral.addEventListener("click", () => {
        settingsMainWindow.classList.add("hidden");
        settingsGeneralWindow.classList.remove("hidden");
    });

    settingsProfile.addEventListener("click", () => {
        settingsMainWindow.classList.add("hidden");
        settingsGeneralWindow.classList.add("hidden");
        settingsProfileWindow.classList.remove("hidden");
    });

    backToMainSettingsWindow.forEach((item) => {
        item.addEventListener("click", () => {
            settingsMainWindow.classList.remove("hidden");
            settingsGeneralWindow.classList.add("hidden");
            settingsProfileWindow.classList.add("hidden");
        });
    });

    function previewImage(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById(previewId);
            preview.src = reader.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>