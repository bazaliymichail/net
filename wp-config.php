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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u9521263_netdb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u9521263_netdb' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'jd76HYniz' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'k05Bg fAd>{RhXXf$!{]0cESd# *Lm#J*>gp<M] $Q{ALd:zZ$plJAIpt$+w|zRp' );
define( 'SECURE_AUTH_KEY',  'KsN[wsvf7l<sd<IKbAJYM&2%o&<eG=0D57V!Vwruqdd&*8XvA8fOM3Jv*ZsjqR=3' );
define( 'LOGGED_IN_KEY',    '$AjZ=/bXVAtkP}k<cPAiZ3|I?jwKPU6|6U;jVM^IZRt98dY/3DBedS)}I @ RrA.' );
define( 'NONCE_KEY',        '^ok4oeJN7r,OV ~FRYoli}yRS-Ri_I$B/L)i,~r4QsF#Omg>Z~~K-D4-UKNx7N(n' );
define( 'AUTH_SALT',        '*5w HG+y-99H-xU/%VE(/&;:Q3FKdFv;7_;:.f?JL7)#c0~@[|Fo%/:uk{YQw!@,' );
define( 'SECURE_AUTH_SALT', 'SVel1B.;v?TrQ !7FB!/,0cdgBy0>z8YKT%?Kp&aLroQp(V;#SsDx_$N3jDbE4dq' );
define( 'LOGGED_IN_SALT',   '1[zA_Lh(}Iac+,;P@o;/F@O_.t.}h]jq;P#pr64Rz`d~P R%?)vGqUWG|omUmc](' );
define( 'NONCE_SALT',       'gg8--ys(zhc;V7ZLUst{C<0qu~@]kdWotR$nc&40NPsLSd~oa]#j_zJCgP#S;!$>' );

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
