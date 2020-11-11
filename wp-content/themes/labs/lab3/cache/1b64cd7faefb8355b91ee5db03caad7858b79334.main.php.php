<?php
/* Smarty version 3.1.36, created on 2020-10-28 21:51:19
  from 'E:\Programs\OpenServer\OSPanel\domains\labs-wordpress\wp-content\themes\labs\lab3\php\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f99e7d7b49f25_30611033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1814ddf0e21ba2d0c638bcdb3a94edad0274da' => 
    array (
      0 => 'E:\\Programs\\OpenServer\\OSPanel\\domains\\labs-wordpress\\wp-content\\themes\\labs\\lab3\\php\\main.php',
      1 => 1603885737,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 15,
),true)) {
function content_5f99e7d7b49f25_30611033 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="http://labs-wordpress/wp-content/themes/labs/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="http://labs-wordpress/wp-content/themes/labs/lab3/css/new_main.css">
    <link rel="shortcut icon" href="http://labs-wordpress/wp-content/themes/labs/lab3/images/icon.ico" type="image/x-icon">
</head>
<body>

<div class="exit-block">
    <a href="http://labs-wordpress/">Вернуться назад</a>
</div>

<div class="main">
    <div class="container">

        <form action="" method="post" id="form-create-pdf">
            <br>
            <div class="mb-3">
                <label for="image-main">Исходное изображение</label><br>
                <input type="file" name="image-main" class="form-control-file" id="image-main" accept=".png, .jpg, .jpeg" required>
            </div>

            <div class="mb-3">
                <button type="button" name="open-wt-text" class="btn btn-primary">Текст водяного знака</button>
                <button type="button" name="open-wt-image" class="btn btn-primary">Изображение водяного знака</button>
            </div>

            <div class="mb-3 wt-text watermark-hide">
                <label for="watermark-text">Водяной знак(текст)</label>
                <input type="text" name="watermark-text" class="form-control" id="watermark-text">
            </div>

            <div class="mb-3 wt-image watermark-hide">
                <label for="watermark-image">Водяной знак(изображение)</label><br>
                <input type="file" name="watermark-image" class="form-control-file" id="watermark-image" accept=".png, .jpg, .jpeg">
            </div>

            <div class="mb-3">
                <label for="message-main">Основной текст</label>
                <textarea name="message-main" class="form-control" id="message-main" required></textarea>
            </div>

            <div class="filters">
                <h1 class="title-filter">Фильтры</h1>

                <div class="mb-3 col-md-3">
                    <label for="font">Выберите шрифт</label><br>
                    <select name="font" id="font" class="form-select">
                                                    <option value="Abbieshire">Abbieshire</option>
                                                    <option value="Sabril">Sabril</option>
                                                    <option value="Samson">Samson</option>
                                            </select>
                </div>

                <div class="form-check form-switch">
                    <input name="flip" class="form-check-input" type="checkbox" id="flip">
                    <label class="form-check-label" for="flip">Поворот</label>
                </div>

                <div class="form-check form-switch">
                    <input name="noise" class="form-check-input" type="checkbox" id="noise">
                    <label class="form-check-label" for="noise">Гамма</label>
                </div>

                <div class="form-check form-switch">
                    <input name="filter" class="form-check-input" type="checkbox" id="filter">
                    <label class="form-check-label" for="filter">Фильтр</label>
                </div>

                <div class="form-check form-switch">
                    <input name="unsharp" class="form-check-input" type="checkbox" id="unsharp">
                    <label class="form-check-label" for="unsharp">Резкость</label>
                </div>

                <div class="form-check form-switch">
                    <input name="mirror" class="form-check-input" type="checkbox" id="mirror">
                    <label class="form-check-label" for="mirror">Отражение</label>
                </div>

                <div class="form-check form-switch">
                    <input name="rotate" class="form-check-input" type="checkbox" id="rotate">
                    <label class="form-check-label" for="rotate">Вращение</label>
                </div>

                <div class="form-check form-switch">
                    <input name="corner" class="form-check-input" type="checkbox" id="corner">
                    <label class="form-check-label" for="corner">Границы</label>
                </div>

                <div class="form-check form-switch">
                    <input name="grayscale" class="form-check-input" type="checkbox" id="grayscale">
                    <label class="form-check-label" for="grayscale">Оттенки серого</label>
                </div>

                <br>
                <div class="colorPicker">
                    <label for="color">Выберите цвет шрифта</label><br>
                    <input type="color" name="color" id="color" class="form-control form-control-color" />
                </div>

            </div>

            <br>
            <button type="submit" name="save-main" class="btn btn-success" id="save-main">Скачать PDF</button>
        </form>

        <br>
        <div class="result"></div>

    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
<script src="http://labs-wordpress/wp-content/themes/labs/lab3/scripts/new_main.js"></script>
</body>
</html><?php }
}
