<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V,T +Se8Y  0_wwwAwj;,]d955qeg>Rm@@r`l&To%_2=Z;^OO=UrCM_&{YZ}v)h-' );
define( 'SECURE_AUTH_KEY',  'aDtx+g$*aXIN#4a7~]tqv(,IE6U[QV)k7+Yk&>K/&|nahXbkY61GDEN3DYM|$N?+' );
define( 'LOGGED_IN_KEY',    '&Dwe|r3vk0Er9eC&3|6085%)TLoX_bq/`xC)(jj]UNrD Lcv)Kd@3|h ]ZcMX>_M' );
define( 'NONCE_KEY',        'x}Z3=vczsz4jAFYY4>$dK!6q&=:IJa~UG+(ve:(4,Xz3 q|}z8~.}L`i30g^P)(i' );
define( 'AUTH_SALT',        '?zP&!(D!vESq%m^`,1M-0yMVA.$VJVAr/uqv?E62(8Pwe__{9&)NUNaZF-f@An] ' );
define( 'SECURE_AUTH_SALT', 'S(Fw;tvk^O3@u1~X3dYz=`p?On &A4+@)XQ45YCZ20Bcq05md;kopR-%QQ%{zh}P' );
define( 'LOGGED_IN_SALT',   'Y<[*`gx(Yr0QXqn.XP_c(<JI=Y_S2/l8a<&C70:xb%}[fJ^tq{!nk`f962R-zT#e' );
define( 'NONCE_SALT',       'QL/crv|L4||&mP(3WX+Fd@*}(G`iF{*i;ccrPN>B-9nWgdUn&]ug~fI9w>y#wzh%' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
