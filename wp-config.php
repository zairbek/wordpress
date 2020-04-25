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
define( 'DB_NAME', 'shopcase' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         'W,oqQ tb+`+Qn]:h3K*;w4}?0DU6coDP@^HGQvKNg4vr1NHkk<i~t_cF]x5E!JNd' );
define( 'SECURE_AUTH_KEY',  'TA|,o{,wj0@+q>/#_mAE0p[xVz?C=AOi(b91l;e9@XfH=XW^3sq2v (JOGd[9aWG' );
define( 'LOGGED_IN_KEY',    '-bG+](DaFcvpX3K.{!`/)5~{!G.u}q87HzX^up>]g/:[J5BjLl?=|@ap.C_&u_E7' );
define( 'NONCE_KEY',        'P%qAo5ZJ,yRmRPyf?r;l:?fhWUY,hXgul |`&!LkL[(Ca{U:M-53nNNAC?U4X>x=' );
define( 'AUTH_SALT',        'Ze|mVH8A>;OWIY/Rtzmh<nLg%)y0>Y=&Se6M!WxD6JTCJ;/f z5^$?apSq3m]dxW' );
define( 'SECURE_AUTH_SALT', '4G]rQq6Pu:CtD%p~t^cL[GAnIp8nb*B(hxwUd_l,EHZ+1fF(:ZioRGZkVLF*_!e*' );
define( 'LOGGED_IN_SALT',   '&WsA0aX%/-!T7+)}PIhycY({`_r`WB:34&e-0=[P@$JR.=C$&%zzG(!-wt.D(F8X' );
define( 'NONCE_SALT',       '.Rh&xgJ%0>(.YR=oIp6j0v?mM5kak|SUqKN5?4NM(`FU`5+3uU$w5dIu4t>rZ;2f' );

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
