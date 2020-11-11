<?php
    require_once get_template_directory() . '/lab3/vendor/autoload.php';

    $smarty = new Smarty();
    $smarty->caching = true;
    $smarty->cache_lifetime = 15;
    $smarty->compile_dir = get_template_directory() . '/lab3/template_c';
    $smarty->config_dir = get_template_directory() . '/lab3/configs';
    $smarty->cache_dir = get_template_directory() . '/lab3/cache';

    $smarty->assign('items', array(
        'title' => 'Главная страница',
        'image_main' => 'Исходное изображение',
        'open_wt_text' => 'Текст водяного знака',
        'open_wt_image' => 'Изображение водяного знака',
        'watermark_text' => 'Водяной знак(текст)',
        'watermark_image' => 'Водяной знак(изображение)',
        'message_main' => 'Основной текст',
        'title_filter' => 'Фильтры',
        'font' => 'Выберите шрифт',
        'flip' => 'Поворот',
        'noise' => 'Гамма',
        'filter' => 'Фильтр',
        'unsharp' => 'Резкость',
        'mirror' => 'Отражение',
        'rotate' => 'Вращение',
        'corner' => 'Границы',
        'grayscale' => 'Оттенки серого',
        'color' => 'Выберите цвет шрифта',
        'save_main' => 'Скачать PDF',
        'css_main' =>  get_stylesheet_directory_uri() . "/lab3/css/new_main.css",
        'icon' => get_stylesheet_directory_uri() . "/lab3/images/icon.ico",
        'js_main' => get_stylesheet_directory_uri() . "/lab3/scripts/new_main.js",
        'exit_block' => get_stylesheet_directory_uri() . "/styles/exit.css",
    ));

    $directory = get_template_directory() . '/lab3/fonts';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    $scanned_directory = array_values($scanned_directory);
    $fonts = array();
    foreach ($scanned_directory as $item){
        $name = mb_substr($item, 0, strpos($item, "."));
        $fonts[$name] = $name;
    }

    $smarty->assign('fonts', $fonts);

    $smarty->display(get_template_directory() . '/lab3/php/main.php');




