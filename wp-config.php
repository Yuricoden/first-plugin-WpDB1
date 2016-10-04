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
define('DB_NAME', 'testnet');

/** Имя пользователя MySQL */
define('DB_USER', 'jony');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'jony12');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#4ht=aoW2H_0sAs%0;x-U<a.<(m&fl.irlv,!@Mo{qk[M^V1{x0.uaF{N$|3OY.C');
define('SECURE_AUTH_KEY',  '3DGb[(hkA`k3q<Gb_(nQ.&,)Tp>fpSg1CD2Ch81d,@YBnImau0nZ~kg<CU+/%!1w');
define('LOGGED_IN_KEY',    '-#9woI>sD37-(pZnal!Cm.T_5)_U#T>G%dUqumoPtjI`mX+T0h-zqbh7=cF>}o2M');
define('NONCE_KEY',        '6q!. sBq#Pv|X%XNf}Cl>Z,,hcn>`t$s5 ^5;M?(o/D!cych$CIKB4xm{U<ld{F/');
define('AUTH_SALT',        '6t$RpP(8hymW[!2$-J$xVrZ/n1v5o3[*}z@_* o|$D1svQX~&3Y|8qDJ`=1=8*]6');
define('SECURE_AUTH_SALT', '$1;FR#NO.{et&L9Rl8P@I*E#i}*c9(;7]SRw{3N-tPHNUo|)d}~_r5c4s*kic5:W');
define('LOGGED_IN_SALT',   '{5&${:*rx?Af}_Mx01a[sc]RS*Rw3)gA!24GKac dRT7f+U(g7&RQnbKWa1K:)xS');
define('NONCE_SALT',       'YZ&s[3e@JC`qpwp?G1zuGJ R!X=q!U7rFm}CH!VK(Ztsiu8U 9gNgCKfb!rf(1C^');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
