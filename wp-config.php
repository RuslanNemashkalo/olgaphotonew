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
define('DB_NAME', 'gbua_74d8fcb8gh');

/** Имя пользователя MySQL */
define('DB_USER', 'gbua_74d8fcb8gh');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '777033cc45');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql313.1gb.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')3!=v 3C[8!~Pe<uB-eFaE1b4cb=1<l[!vEVjUb6}=PyYB0+RH--?8enS}@+=]zQ');
define('SECURE_AUTH_KEY',  'W3m?n]fwP6ORT)a<ofQsN#U%1l->.-v}{VEM,BQZuYvZY|plT6J]au*aA3AN&nnA');
define('LOGGED_IN_KEY',    'OJd[[*4kGij9:];mV%6ae(_8^N}Sb8i|=`biI*N^uZce%aR916#=NPN>_YzJ`?)r');
define('NONCE_KEY',        'D]%:VEKt(qvCaOmpr6IbtNmuz!shaO=hT-fF]vq~GzJC6?^N.OcjOQhI<W)4r|/8');
define('AUTH_SALT',        'H1oD}W@]|{` ju^}ehFS*DcNdy1Y;}caApDFXuXEZ%^LzERhc+oRFP:#Qj?P&o&W');
define('SECURE_AUTH_SALT', 'z4AZrA`!M(#y$c6TBeC<_2eHzh(bP h>gZ!.Q^?<)AmUPYL?ub_q3Y{Y_Kd`~5wd');
define('LOGGED_IN_SALT',   '52Qw#fq/RCzlEAFl+ELz`1C!+E}.@Tm2vJq;@Ev#9uX8=X/)<::633 e?&PyKS^^');
define('NONCE_SALT',       'Sz+U.CR787|*6ahJQi2#ye&* 3xT+4L[5*:Ksbcv.OKNeA33ynq$P[8k$SH15lQv');

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
