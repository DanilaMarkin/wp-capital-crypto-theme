<?php
class WP_Custom_SideWalker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $icon = get_post_meta($item->ID, '_menu_list_image', true);

        // Получаем мета-данные изображения
        $image_id = get_post_meta($item->ID, '_menu_list_image_id', true);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Альтернативный текст
        $image_title = get_the_title($image_id); // Заголовок изображения

        // Определяем, является ли текущий элемент активным
        $classes = ['sidemenu__item']; // Основной класс
        if (in_array('current-menu-item', $item->classes)) {
            $classes[] = 'active'; // Добавляем класс active, если это текущий элемент
        }

        $output .= '<li class="' . join(' ', $classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '" class="sidemenu__link">';

        // Выводим SVG-иконку, если она есть
        if (!empty($icon)) {
            $output .= '<img src="' . esc_url($icon) . '" alt="' . esc_attr($image_alt) . '" title="' . esc_attr($image_title) . '" width="18" height="18" loading="lazy">';
        }

        // Выводим текст ссылки
        $output .= '<p>' . esc_html($item->title) . '</p>';
        $output .= '</a>';
        $output .= '</li>';
    }
}

class WP_Custom_General_SideWalker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $icon = get_post_meta($item->ID, '_menu_list_image', true);

        // Получаем мета-данные изображения
        $image_id = get_post_meta($item->ID, '_menu_list_image_id', true);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Альтернативный текст
        $image_title = get_the_title($image_id); // Заголовок изображения

        // Определяем, является ли текущий элемент активным
        $classes = ['sidemenu__item']; // Основной класс
        if (in_array('current-menu-item', $item->classes)) {
            $classes[] = 'active'; // Добавляем класс active, если это текущий элемент
        }

        $output .= '<li class="' . join(' ', $classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '" class="sidemenu__link">';

        // Выводим SVG-иконку, если она есть
        if (!empty($icon)) {
            $output .= '<img src="' . esc_url($icon) . '" alt="' . esc_attr($image_alt) . '" title="' . esc_attr($image_title) . '" width="18" height="18" loading="lazy">';
        }

        // Выводим текст ссылки
        $output .= '<p>' . esc_html($item->title) . '</p>';
        $output .= '</a>';
        $output .= '</li>';
    }
}
