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
define( 'DB_NAME', 'webcap-theme' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '4|.R_0C^v]RS.LE]E_UnU;}YsLUe+YwUIPU+$BWkm&LzUNxC4Z{FST/n}|m40.&m' );
define( 'SECURE_AUTH_KEY',  'ISCN=/Ve@<TL>{C~wnFNTS`&^mzoUA}xck9p2CXxVD];UWorzy^a&0j}`KnXzm)C' );
define( 'LOGGED_IN_KEY',    '{_1V[q^8Q_c~YMw~r7rwUj: /+7#|#w#pzs%^f#mAQ8WGj,{_x.0Yn>m SG/|*O?' );
define( 'NONCE_KEY',        'Wy]i5vbUYRu?4z[gc(#F&PU<mB|*mTMEw/d)`EDj7I4AV!]K{hC~lw@q-FD1E<}M' );
define( 'AUTH_SALT',        'zR(=ID[*Uru>1(=D$mus.@sBr9.H?x}^O6*2i9JkVSyu(|r9OOYU_ny*sej(2KgX' );
define( 'SECURE_AUTH_SALT', 'qW:8{Dei:(H81*{}n+/$hIfieQub+H5Z{}q^Kw8cQj|URY5M&nit33)Y1,^x{,;v' );
define( 'LOGGED_IN_SALT',   'O5hLj$ZADqW=Q7  )#tj{{F}A|wyCJ#,Sea~?J:%xtb*Sok6>sCbj4Az3fNQ3,v6' );
define( 'NONCE_SALT',       'mFTwn4}2nsy(Ue/(!9+1w#5:%/{3&U}>)3gG-}7^?Z4RT4Op=muM^6 lh=R;|h1J' );

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

define('FS_METHOD','direct');
