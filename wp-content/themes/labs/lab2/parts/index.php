<?php require_once get_template_directory() . '/lab2/parts/connect.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/exit.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/css/header.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/css/news.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/css/administration.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/images/general/Logotip.ico" type="image/x-icon">
</head>
<body>

<?php get_template_part('exit-block'); ?>
<?php require_once get_template_directory() .  '/lab2/parts/header.php'; ?>

<section class="content">
    <div class="container">
        <div class="main">

            <div class="sort_list_news">
                <span>
                    <label for="sort-date">Выберите хронологию новостей:</label>
                    <select id="sort-date" name="sort-date" class="select-css">
                        <option value="date-DESC">По убыванию даты</option>
                        <option value="date-ASC">По возрастанию даты</option>
                    </select>
                </span>
               <span>
                    <label for="sort-likes">Сортировать по лайкам</label>
                    <select id="sort-likes" name="sort-likes" class="select-css">
                        <option value="likes-ASC">По возрастанию</option>
                        <option value="likes-DESC">По убыванию</option>
                    </select>
               </span>
            </div>

            <div class="list_news"></div>

            <div class="popup-fade">
                <div class="popup">
                    <span class="popup-close" onclick="closeTiding(this)"><i class="fa fa-times fa-2x" aria-hidden="true"></i></span>
                    <div class="specific_tiding"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lab2/scripts/news.js"></script>

<?php if (!empty($_GET['sort'])): ?>
    <script>
        editSelected();
    </script>
<?php endif; ?>

</body>
</html>
