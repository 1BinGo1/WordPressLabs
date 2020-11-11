<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'labs-wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V5E`qTq,xZ`;%*=D%VjZ#g=RW)j2C6sF.X#|ffxq_r:R3?Y;[>6/W]z4{c+/;0v<' );
define( 'SECURE_AUTH_KEY',  ':`MGPDbrU)xZL(4&ZnN6Z6Lt#_T[i~J0#!lrLu*K%8Q#ua$Czo.CX0vRfR_~^W)#' );
define( 'LOGGED_IN_KEY',    '~Y%s7=<t;OT%8RiY9u87%)40vTgY/?a:YH ?GrOfgIK3DdP7]3o[>3!#6Wv,ES<u' );
define( 'NONCE_KEY',        'jV<;o`Dz?J,0+]+dlaD@}57qF$i11{X)g(ZrDKSFVKe3e#tn:GKNM4wvjMU2P0nE' );
define( 'AUTH_SALT',        'p-YvH}+Rw$d3SiyK1N>t^n%axRa?mM5b^ _EZz?A~QE52IgP-G?<kBR.{uj*tcj=' );
define( 'SECURE_AUTH_SALT', 'I4Vn^UQ<cMeRX/q:vBJbtE0m-&aHW8xWp|e8Z&>^/M|SK{uD6)U7CqK2{F#}4zav' );
define( 'LOGGED_IN_SALT',   't)`sCvC&T;vLY;S5xt5xZ%6CcCd*u]p{Pb6g)$Q~AitNse2:U*9z{jn9[?VE2]E)' );
define( 'NONCE_SALT',       'j](;|~NN7cGpN<e/z?jm-Xy]bR8YUyxO%$5I_6yT5SC4-[aKk~UtI;Bp0&yr-ipV' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
