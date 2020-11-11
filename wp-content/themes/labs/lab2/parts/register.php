<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/exit.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/css/register.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/lab2/images/general/Logotip.ico" type="image/x-icon">
</head>
<body>

<?php get_template_part('exit-block'); ?>
<?php require_once get_template_directory() . '/lab2/parts/header.php'; ?>

<section class="content">
    <div class="container">

        <div class="main">
            <h1>Регистрация</h1>
            <div class="register">
                <form action="" method="post" novalidate>
                    <p>
                        <label for="login">Логин: <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                        <input type="text" name="login" id="login">
                        <span id="error_login"></span>
                    </p>
                    <p>
                        <label for="password">Пароль: <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                        <input type="password" name="password" id="password">
                        <span id="error_password"></span>
                    </p>
                    <p>
                        <label for="confirm_password">Повторите пароль: <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                        <input type="password" name="confirm_password" id="confirm_password">
                        <span id="error_confirm_password"></span>
                    </p>
                    <button name="register" type="submit" id="register">Зарегистрироваться</button>
                    <a href="<?php echo home_url() . '/lab-2/entrance' ?>">Вернуться к входу</a>
                </form>
            </div>
        </div>

    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lab2/scripts/register.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/lab2/scripts/news.js"></script>
</body>
</html>