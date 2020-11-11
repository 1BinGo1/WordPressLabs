<header>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/lab2/images/general/Logo.png" alt="Image">
            </div>
            <div class="list">
                <form action="" method="post">
                    <ul>
                        <?php
                            $months = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];
                        ?>
                        <li><p id="time"><?= date("j") . " " . $months[date("n")] . " " . date("Y") . " г. " . date('H:i:s'); ?></p></li>
                        <li><a href="<?php echo home_url() . '/lab-2/'; ?>"><i class="fa fa-home fa-2x" aria-hidden="true" title="Главная страница"></i></a></li>
                        <li><a href="<?php echo home_url() . '/lab-2/entrance'; ?>"><i class="fa fa-cog fa-2x" aria-hidden="true" title="Администрирование"></i></a></li>
                        <?php if (isset($_COOKIE['auth']) && $_COOKIE['auth'] == 'yes' ): ?>
                            <li><button type="submit" name="exit" id="exit"><i class="fa fa-sign-out fa-4x" aria-hidden="true" title="Выход"></i></button></li>
                        <?php endif; ?>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</header>

