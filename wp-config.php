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
define( 'DB_NAME', 'patachok' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'dr4mple' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '@ ,{`L3mK.9O|yg-;VQqFkB)]U*D)Wu)W6mb4|n.KeOJ1q8l2kVwouGxjcs~Udjn' );
define( 'SECURE_AUTH_KEY',  'rxWT8n=Zft_iIS44djR9%T/u}(6ANihUyvlD{0g eRCcfR5IVMtK^NjR4j)5OIi%' );
define( 'LOGGED_IN_KEY',    'L,nPPGS,l/pdX(EQA YVO}gfk_68pU|u7YK<BSD&1;cr0[6kuD0L}KNh$yS|:2en' );
define( 'NONCE_KEY',        'K`oL+#xR^?~:&WXez/sp&P*Ks|hcjRoy>d^(*{0 Ai~u,F38>MYkUOJc#%(mgnn`' );
define( 'AUTH_SALT',        '6_UUp@)L$P:v<TYv@T#C!gG|bA:%M-OX1!`gI/YoH v*J5[=_8ZEE?L~^fhU0:nL' );
define( 'SECURE_AUTH_SALT', '@`XUShs}Lx<k&0@=}+djSz0I]tvP?A^!CCny96^.8)9=j|aeVIheD=y7]y=4=oGU' );
define( 'LOGGED_IN_SALT',   ';ZETWOiG#_2g73DKM2:v 4f6L+$~ua9xc><Pgk6vAeFv6h38}FV2Dd;.CYNo;Z@^' );
define( 'NONCE_SALT',       ')xaWi*]QfgM/tF`.Un3,Bt+w&!Vs !}z;x@x  IIMK2S1|6qcp%r?6qv:0Xx#i|Y' );

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
