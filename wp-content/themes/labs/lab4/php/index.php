<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/exit.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/lab4/styles/main.css">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/lab4/images/Icon.ico" type="image/x-icon">

</head>
<body>

<?php get_template_part('exit-block'); ?>
<div class="main">
    <div class="container">
        <form action="" method="post" id="form-get-links">
            <div class="col">
                <div class="input-group">
                    <input type="text" name="link" class="form-control" placeholder="Введите ссылку сайта..." id="link">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" name="search" id="search">Вывод</button>
                        <button type="button" name="clear" class="btn btn-info" id="clear">Очистить</button>
                    </span>
                </div>
            </div>
        </form>
        <br>
        <div class="result"></div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/lab4/scripts/main.js"></script>
</body>
</html>