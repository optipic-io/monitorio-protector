<?php

return [

    // Panel page title
    'title_home' => 'Обзор',
    'title_overview' => 'Обзор',
    'title_iptables_manager' => 'iptables Менеджер',
    'title_iptables_status' => 'iptables Статус',
    'title_operation_status' => 'Статус работы',
    'title_action_logs' => 'Журнал действий',
    'title_web_authentication' => 'Проверка подлинности веб-страницы',
    'title_xss_protection' => 'XSS Защита',
    'title_basic_setting' => 'Основные настройки',
    'title_messenger' => 'Уведомления',
    'title_ip_manager' => 'IP Менеджер',
    'title_exclusion_list' => 'Исключение',
    'title_login' => 'Войдите в панель системы защиты',
    'title_title_site_wide' => 'Система защиты',
    'title_circle_rule' => 'Таблица правил',
    'title_circle_filter' => 'Таблица фильтров',
    'title_circle_session' => 'Таблица сессий',

    // Reasons
    'reason_manual_ban' => 'Добавлено вручную администратором.',
    'reason_is_search_engine' => 'Бот поисковой системы.',
    'reason_is_google' => 'Google бот.',
    'reason_is_bing' => 'Bing бот.',
    'reason_is_yahoo' => 'Yahoo бот.',
    'reason_too_many_sessions' => 'Слишком много сеансов.',
    'reason_too_many_accesses' => 'Слишком много обращений.',
    'reason_empty_js_cookie' => 'Невозможно создать файлы cookie JS.',
    'reason_empty_referer' => 'Пустой referrer.',
    'reason_reached_limit_day' => 'Лимит в день достигнут.',
    'reason_reached_limit_hour' => 'Лимит в час достигнут.',
    'reason_reached_limit_minute' => 'Лимит в минуту достигнут.',
    'reason_reached_limit_second' => 'Лимит в секунду достигнут.',
    'reason_invalid_ip' => 'Неверный IP-адрес.',
    'reason_deny_ip' => 'Запрещено IP-компонентом.',
    'reason_allow_ip' => 'Разрешено IP-компонентом.',
    'reason_component_ip' => 'Запрещено IP-компонентом.',
    'reason_component_rdns' => 'Запрещено RDNS-компонентом.',
    'reason_component_header' => 'Запрещено Header-компонентом.',
    'reason_component_useragent' => 'Запрещено User-agent-компонентом.',
    'reason_component_trusted_robot' => 'Опознано как поддельная поисковая система.',

    // Menu
    'nav_locale' => 'Язык',
    'menu_firewall' => 'Защита',
    'menu_status' => 'Статус',
    'menu_overview' => 'Состояние',
    'menu_settings' => 'Настройки',
    'menu_ip_manager' => 'IP Менеджер',
    'menu_xss_protection' => 'XSS Защита',
    'menu_authentication' => 'HTTP авторизация',
    'menu_exclusion' => 'Исключение',
    'menu_last_month' => 'Прошлый месяц',
    'menu_this_month' => 'Этот месяц',
    'menu_last_7_days' => 'Последние 7 дней',
    'menu_yesterday' => 'Вчера',
    'menu_today' => 'Сегодня',
    'menu_ip_filter_logs' => 'Журнал фильтров',
    'menu_ip_rules' => 'Временные IP-правила',
    'menu_sessions' => 'Сессии',
    'menu_action_logs' => 'Журнал действий',
    'menu_data_circle' => 'Жизненный цикл',
    'menu_operation_status' => 'Операция',
    'menu_iptables_manager' => 'Менеджер',
    'menu_iptables_status' => 'Статус',
    'menu_messenger' => 'Уведомления',
    'menu_iptables_bridge' => 'iptables Менеджер',
    'menu_iptables_ipv4' => 'IPv4 iptables',
    'menu_iptables_ipv6' => 'IPv6 iptables',

    // Message
    'error_mysql_connection' => 'Нет доступа к базе данных MySQL, проверьте свои настройки.',
    'error_mysql_driver_not_supported' => 'Ваша система не поддерживает драйвер MySQL.',
    'error_sqlite_driver_not_supported' => 'Ваша система не поддерживает драйвер SQLite.',
    'error_sqlite_directory_not_writable' => 'Драйвер данных SQLite требует, чтобы каталог хранилища был доступен для записи.',
    'error_redis_driver_not_supported' => 'Ваша система не поддерживает драйвер Redis.',
    'error_file_directory_not_writable' => 'Файловый драйвер данных требует, чтобы каталог хранилища был доступен для записи.',
    'error_logger_directory_not_writable' => 'Регистратору действий требуется, чтобы каталог хранилища был доступен для записи.',
    'error_invalid_json_file' => 'Неверный файл JSON.',
    'error_invalid_config_file' => 'Неверный файл конфигурации Shieldon.',
    'success_settings_saved' => 'Настройки сохранены',
    'success_json_imported' => 'Файл JSON успешно импортирован.',

    // Others.
    'field_not_visible' => 'Невозможно просмотреть это поле в демонстрационном режиме.',
    'permission_required' => 'Требуется разрешение.',

    // Header status bar.
    'channel' => 'Канал',
    'mode' => 'Режим',
    'logout' => 'Выйти',

    // Setting - authentication page.
    'auth_heading' => 'HTTP авторизация',
    'auth_description' => 'Заголовок ответа HTTP WWW-Authenticate определяет метод аутентификации, который следует использовать для получения доступа к ресурсу.',
    'auth_label_url_path' => 'URL путь',
    'auth_label_username' => 'Пользователь',
    'auth_label_password' => 'Пароль',
    'auth_btn_submit' => 'Добавить',
    'auth_label_encrypted' => 'зашифрованный',
    'auth_label_remove' => 'Удалить',

    // Setting - exclusion page.
    'excl_heading' => 'Исключение',
    'excl_description' => 'Пожалуйста, введите начало URL-адресов, которые вы хотите исключить из защиты Shieldon.',

    // IP Manager
    'ipma_heading' => 'IP Менеджер',
    'ipma_description' => <<<TXT
IP Менеджер не похож на "Временные IP Правила" (Временные правила актуальны лишь в рамках текущего жизненного цикла). 
<br>Все правила "IP Менеджера", которые вы здесь добавите, являтся постоянными.
<br><br>
<strong>Какие IP рекомендуется добавить сюда:</strong>
<ul>
    <li>Внешний IP-адрес 1С-сервера, с которого происходит обмен товарами, заказами и т.д.</li>
    <li>IP-адреса администаторов и разработчиков сайта.</li>
    <li>Внешний IP-адрес текущего сайта/сервера.</li>
</ul>
TXT
,
    'ipma_label_ip' => 'IP',
    'ipma_label_order' => 'Приоритет',
    'ipma_label_rule' => 'Правило',
    'ipma_label_action' => 'Действие',
    'ipma_label_plz_select' => 'Выберите',
    'ipma_label_remove_ip' => 'Удалить этот IP',
    'ipma_label_allow_ip' => 'Разрешить этот IP',
    'ipma_label_deny_ip' => 'Запретить этот IP',

    // Log
    'log_heading_captchas' => 'CAPTCHA',
    'log_heading_pageviews' => 'Просмотры страниц',
    'log_note_captcha_last_month' => 'Показов CAPTCHA за прошлый месяц.',
    'log_note_pageview_last_month' => 'Просмотров страниц за прошлый месяц.',
    'log_note_captcha_last_7_days' => 'Показов CAPTCHA за последние 7 дней.',
    'log_note_pageview_last_7_days' => 'Просмотров страниц за последние 7 дней.',
    'log_note_pageview_this_month' => 'Просмотров страниц за этот месяц.',
    'log_note_captcha_this_month' => 'Показов CAPTCHA за этот месяц.',
    'log_note_captcha_today' => 'Показов CAPTCHA сегодня.',
    'log_note_pageview_today' => 'Просмотров страниц сегодня.',
    'log_note_pageview_yesterday' => 'Просмотров страниц вчера.',
    'log_note_captcha_yesterday' => 'Показов CAPTCHA вчера.',

    'log_label_last_month' => 'Прошлый месяц',
    'log_label_this_month' => 'Этот месяц',
    'log_label_last_7_days' => 'Последние 7 дней',
    'log_label_yesterday' => 'Вчера',
    'log_label_today' => 'Сегодня',
    'log_msg_no_logger' => 'Извините, вам необходимо внедрить ActionLogger, чтобы использовать эту функцию.',
    'log_label_in_queue' => 'В очереди',
    'log_label_in_blacklist' => 'В черном списке',
    'log_label_captcha' => 'CAPTCHA',
    'log_label_pageviews' => 'Просмотров страниц',
    'log_label_session' => 'Сессий',
    'log_label_solved' => 'решено',
    'log_label_failed' => 'неудачный',
    'log_label_displays' => 'показано',
    'log_label_timezone' => 'Часовой пояс',
    'log_label_cache_time' => 'Время создания отчета',

    // Overview
    'overview_heading_data_circle' => 'Жизненный цикл',
    'overview_label_mysql' => 'MySQL',
    'overview_text_rows' => 'строк',
    'overview_note_sql_db' => 'SQL база данных.',
    'overview_note_memory_db' =>  'In-memory база данных.',
    'overview_label_redis' => 'Redis',
    'overview_btn_close' => 'Закрыть',
    'overview_btn_save' => 'СОХРАНИТЬ',
    'overview_note_image_captcha' => 'Простая Captcha (введите текст с картинки).',
    'overview_label_image_captcha' => 'Простая Captcha',
    'overview_note_recaptcha' => 'Капча от Google.',
    'overview_label_recaptcha' => 'reCAPTCHA',
    'overview_heading_captcha' => 'Captcha модули',
    'overview_note_action_logger' => 'Записывать поведение каждого посетителя.',
    'overview_label_action_logger' => 'Журнал действий',
    'overview_heading_logger' => 'Журнал',
    'overview_text_since' => 'с',
    'overview_text_days' => 'дней',
    'overview_text_size' => 'размер',
    'overview_note_useragent' => 'Анализирует User Agent посетителей.',
    'overview_label_useragent' => 'User Agent',
    'overview_note_rdns' => 'Определяет имя компьютера (домен) по IP пользователя (RDNS).',
    'overview_label_rdns' => 'RDNS',
    'overview_note_header' => 'Анализирует заголовки запросов посетителей.',
    'overview_label_header' => 'Заголовок',
    'overview_note_trustedbot' => 'Разрешает популярным поисковым системам сканировать сайт.',
    'overview_label_trustedbot' => 'Проверенные роботы',
    'overview_note_ip' => 'Расширенное управление IP-адресами.',
    'overview_label_ip' => 'IP',
    'overview_heading_components' => 'Компоненты',
    'overview_note_referer' => 'Проверяет заголовок HTTP referrer (предыдущая открытая страница).',
    'overview_label_referer' => 'Referrer',
    'overview_note_frequency' => 'Проверяет, как часто посетитель просматривает страницы.',
    'overview_label_frequency' => 'Частота',
    'overview_note_session' => 'Определяет, были ли созданы несколько сеансов одним и тем же посетителем.',
    'overview_label_session' => 'Сессии',
    'overview_note_cookie' => 'Проверяет, могут ли посетители создавать файлы cookie с помощью JavaScript.',
    'overview_label_cookie' => 'Cookie',
    'overview_heading_filters' => 'Фильтры',
    'overview_label_sqlite' => 'SQLite',
    'overview_note_file_system' => 'Файловая система.',
    'overview_label_file' => 'Файл',
    'overview_reset_data_circle' => 'Сбросить Жизненный Цикл',
    'overview_reset_action_logs' => 'Сбросить Журнал действий',
    'overview_thread_rows' => 'Строк',
    'overview_thread_table' => 'Таблица',
    'overview_text_reset_data_circle_1' => 'Вы хотите сбросить текущий Жизненный Цикл?',
    'overview_text_reset_data_circle_2' => 'Выполнение этого действия удалит все данные из текущего Жизненного цикла и перестроит таблицы данных. Вы автоматически выйдете из панели управления.',
    'overview_text_reset_action_logs' => 'Вы хотите очистить все Журналы действий?',
    'overview_heading_messenger' => 'Модули Уведомлений',
    'overview_label_telegram' => 'Telegram',
    'overview_note_telegram' => 'Отправляйте уведомления в свой канал Telegram.',
    'overview_label_linenotify' => 'Line уведомления',
    'overview_note_linenotify' => 'Отправляйте уведомления в вашу группу Line.',
    'overview_label_sendgrid' => 'SendGrid',
    'overview_note_sendgrid' => 'Отправляйте уведомления на вашу электронную почту через SendGrid API.',
    'overview_label_slack' => 'Slack',
    'overview_note_slack' => 'Отправляйте уведомления в свой канал Slack через Slack API.',
    'overview_label_slackwebhook' => 'Slack Webhook',
    'overview_note_slackwebhook' => 'Отправляйте уведомления в свой канал Slack через Slack Webhook.',
    'overview_label_mailgun' => 'MailGun',
    'overview_note_mailgun' => 'Отправляйте уведомления на вашу электронную почту через MailGun API.',
    'overview_label_smtp' => 'SMTP',
    'overview_note_smtp' => 'Отправляйте уведомления на вашу электронную почту через свой SMTP сервер.',
    'overview_label_rocketchat' => 'RocketChat',
    'overview_note_rocketchat' => 'Отправляйте уведомления в свой канал RocketChat.',
    'overview_label_mail' => 'Email через PHP',
    'overview_note_mail' => 'Отправляйте уведомления на вашу электронную почту через PHP-функцию mail().',

    // IP log table.
    'table_heading_ip_log' => 'Журнал Фильтров',
    'table_description_ip_log_1' => 'Здесь Shieldon фиксирует странное поведение пользователей.',
    'table_description_ip_log_3' => 'После начала нового жизненного цикла таблица с журналом фильтров будет очищена.',
    'table_label_resolved_hostname' => 'Определенное имя хоста',
    'table_label_last_visit' => 'Последний визит',
    'table_label_flags' => 'Флаги',

    // Rule table.
    'table_heading_rule' => 'Временные IP-правила',
    'table_description_rule_1' => 'Shieldon временно разрешает или запрещает доступ пользователям на основе этой таблицы.',
    'table_description_rule_3' => 'Временные IP-правила будут сброшены, когда начнется жизненный цикл.',
    'table_label_deny_ip_temporarily' => 'Запретить этот IP (временно)',
    'table_label_deny_ip_permanently' => 'Запретить этот IP (постоянно)',
    'table_ip_placeholder' => 'Введите IP-адрес..',
    'table_label_type' => 'Тип',
    'table_label_reason' => 'Причина',
    'table_label_time' => 'Время',
    'table_label_remove' => 'Удалить',

    // Session table.
    'table_heading_session' => 'Сессии',
    'table_label_remain_seconds' => 'Осталось секунд',
    'table_label_priority' => 'Приоритет',
    'table_label_status' => 'Статус',
    'table_label_session_id' => 'ID Сессии',
    'table_text_allowable' => 'Допустимый',
    'table_text_expired' => 'Истекший',
    'table_text_waiting' => 'Ожидающий',
    'table_description_session_1' => 'Журнал в режиме реального времени для <strong>управления сеансами посетителей</strong>.',
    'table_description_session_2' => 'Примечание: это работает только при активации функции.',
    'table_heading_limit' => 'Лимит',
    'table_note_limit' => 'Лимит онлайн-сессии.',
    'table_heading_period' => 'Период',
    'table_note_period' => 'Период активности (в минутах)',
    'table_heading_online' => 'Онлайн',
    'table_note_online' => 'Кол-во посетителей онлайн.',

    // Xss protection.
    'xss_heading' => 'XSS Зищтта',
    'xss_description' => 'Предотвращает XSS атаки (Межсайтовый скриптинг).',
    'xss_label_variable' => 'Переменная',
    'xss_text_eradicate_injection' => 'Исключить строку с потенциальной инъекцией для одной переменной.',
    'xss_label_single_variable' => 'Одиночная переменная',
    'xss_label_variable_name' => 'Имя переменной',
    'xss_text_update_above_settings' => 'Обновить указанные выше настройки.',
    'xss_text_filter_cookie_variables' => 'Фильтровать все переменные метода COOKIE.',
    'xss_text_filter_get_variables' => 'Фильтровать все переменные метода GET.',
    'xss_text_filter_post_variables' => 'Фильтровать все переменные метода POST.',

    // Tab
    'tab_heading_adminlogin' => 'Логин администратора',
    'tab_heading_dialogui' => 'Интерфейс',
    'tab_heading_captchas' => 'CAPTCHA',
    'tab_heading_filters' => 'Фильтры',
    'tab_heading_components' => 'Компоненты',
    'tab_heading_daemon' => 'Основное',

    // Setting - admin login.
    'setting_heading_adminlogin' => ' Логин администратора',
    'setting_label_last_modified' => 'Последнее изменение',
    'setting_label_password' => 'Пароль',
    'setting_label_user' => 'Имя пользователя',

    // Setting - captcha.
    'setting_heading_recaptcha' => 'reCAPTCHA Google',
    'setting_label_recaptcha_key' => 'Ключ сайта',
    'setting_note_recaptcha_key' => 'Введите ключ сайта от Google reCaptcha.',
    'setting_label_recaptcha_secret' => 'Секретный ключ',
    'setting_note_recaptcha_secret' => 'Введите секретный ключ сайта от Google reCahptcha.',
    'setting_label_recaptcha_version' => 'Версия',
    'setting_note_recaptcha_version' => 'Используйте соответствующий ключ для выбранной вами версии, иначе она не сработает..',
    'setting_label_recaptcha_lang' => 'Язык (код)',
    'setting_note_recaptcha_lang' => 'ISO 639 - ISO 3166 код. Пример: Используйте ru-RU для русского языка интерфейса reCAPTCHA.',
    'setting_note_image_captcha_1' => 'Буквенно-цифровая строка с символами нижнего и верхнего регистра.',
    'setting_note_image_captcha_2' => 'Строка только с прописными и строчными буквами.',
    'setting_note_image_captcha_3' => 'Только числовая строка.',
    'setting_note_image_captcha_length' => 'Сколько символов вы хотите отображать в CAPTCHA.',
    'setting_label_length' => 'Длина',
    'setting_heading_image_captcha' => 'Изображение',

    // Setting - component.
    'setting_heading_component_ip' => 'IP',
    'setting_note_component_ip' => 'Активируйте IP Менеджер, включив эту опцию.',
    'setting_heading_component_tb' => 'Проверенные роботы',
    'setting_note_component_tb_1' => 'Разрешите популярным поисковым системам сканировать ваш сайт.',
    'setting_note_component_tb_2' => 'Примечание: отключение этой опции повлияет на ваше SEO, потому что боты будут проходить процесс проверки и могут быть автоматически заблокированы.',
    'setting_label_strict_mode' => 'Строгий режим',
    'setting_note_component_tb_3' => 'IP-адрес, определенный по имени хоста (через PTR) и исходный IP-адрес посетителя обязательно должны совпадать.',
    'setting_heading_component_header' => 'Заголовки',
    'setting_note_component_header_1' => 'Анализировать информацию HTTP-заголовков посетителей.',
    'setting_note_component_header_2' => 'Запретить всех посетителей без информации в основных заголовках.',
    'setting_heading_component_useragent' => 'User Agent',
    'setting_note_component_useragent_1' => 'Анализировать информацию о user-agent посетителей.',
    'setting_note_component_useragent_2' => 'Пользователи с пустой информацией о user-agent будут заблокированы.',
    'setting_heading_component_rdns' => 'Обратный DNS (rNDS)',
    'setting_note_component_rdns_1' => 'Как правило, для IP-адреса от интернет-провайдера (ISP) часто устанавливается RDNS. Эта опция работает только при включенном строгом режиме.',
    'setting_note_component_rdns_2' => '
            В строгом режиме посетители блокируются по следующим условиям. <br />
             - IP-адрес без записи PTR. <br />
             - Возвращаемое значение pinging PTR и IP-адрес не совпадает. <br />
             - PTR не является действительным полным доменным именем. <br />
             Эта опция будет запрещать почти все прокси-серверы и VPN-серверы в Интернете, а некоторые интернет-провайдеры могут не предоставлять PTR для своих IP-адресов, поэтому используйте его осторожно.
        ',

    // Setting - daemon
    'setting_heading_enable' => 'Включить',
    'setting_label_data_driver' => 'Драйвер данных',
    'setting_note_data_driver' => 'Начните защищать свой сайт, внедрив Shieldon. Shieldon Firewall работает, только если этот параметр включен..',
    'setting_label_driver_file' => 'Файловая система',
    'setting_label_driver_mysql' => 'MySQL',
    'setting_label_driver_redis' => 'Redis',
    'setting_label_driver_sqlite' => 'SQLite',
    'setting_label_mysql_host' => 'Хост',
    'setting_label_mysql_dbname' => 'База данных',
    'setting_label_mysql_user' => 'Пользователь',
    'setting_label_mysql_password' => 'Пароль',
    'setting_label_mysql_charset' => 'Кодировка',
    'setting_label_redis_host' => 'Хост',
    'setting_label_redis_port' => 'Порт',
    'setting_label_redis_auth' => 'Авторизация',
    'setting_note_redis_auth' => 'Требуется, только если требуется пароль.',
    'setting_note_driver_not_recommended' => 'Не рекомендуется для сайтов с высокой посещаемостью.',
    'setting_label_directory' => 'Каталог',
    'setting_note_directory' => 'Абсолютный путь к каталогу, в котором вы храните данные.',
    'setting_label_reset_data_cycle' => 'Сбросить Жизненный Цикл',
    'setting_note_reset_data_cycle' => 'Автоматически очищать все журналы каждый день в 00:00. Включение этой опции улучшит производительность.',
    'setting_label_ip_source' => 'Источник IP-адреса',
    'setting_note_ip_source' => 'Ваш веб-сайт находится позади службы CDN или используется проксирование? Если так, вы должны правильно установить этот параметр; в противном случае все IP-адреса с серверов CDN или при использовании проксирования, вероятно, будут забанены.',
    'setting_label_session_limit' => 'Лимит Сессий',
    'setting_note_session_limit_1' => 'Когда количество пользователей онлайн достигнет предела, пользователи, которые не находятся в очереди, должны выстроиться в очередь!',
    'setting_note_session_limit_2' => 'Следующее изображение является примером.',
    'setting_label_online_limit' => 'Лимит Онлайн',
    'setting_note_online_limit' => 'Максимальное количество пользователей онлайн.',
    'setting_label_alive_period' => 'Keep Alive Period - период активности',
    'setting_note_alive_period' => 'Единица: минута.',
    'setting_label_action_logs' => 'Журнал действий',
    'setting_label_action_logger' => 'Журнал действий',
    'setting_heading_dailogui' => 'Интерфейс',
    'setting_label_language' => 'Язык',
    'setting_label_background_image' => 'Фоновая картинка',
    'setting_note_background_image' => 'Укажите полный URL или относительный путь к изображению.',
    'setting_label_background_color' => 'Фоновый цвет',
    'setting_note_background_color' => 'Вы можете указать цвет фона, если не хотите использовать фоновое изображение.',
    'setting_label_dialog_header' => 'Заголовок диалога',
    'setting_text_for_example' => 'Например',
    'setting_label_font_color' => 'Цвет шрифта',
    'setting_label_shadow_opacity' => 'Прозрачность тени',
    'setting_note_shadow_opacity' => 'Диапазон от 0 до 1, например, 0,2 означает непрозрачность 20%.',
    'setting_heading_filter_frequency' => 'Частота',
    'setting_note_filter_frequency_1' => 'Не беспокойтесь о посетителях-людях, и если они достигнут ограничения и будут заблокированы, они могут легко продолжить просмотр вашего веб-сайта, пройдя CAPTCHA.',
    'setting_note_filter_frequency_2' => 'Следующее изображение является примером.',
    'setting_label_secondly_limit' => 'Секундный лимит',
    'setting_label_minutely_limit' => 'Минутный лимит',
    'setting_label_hourly_limit' => 'Часовой лимит',
    'setting_label_daily_limit' => 'Дневной лимит',
    'setting_note_secondly_limit' => 'Лимит просмотров для 1 посетителя за 1 секунду.',
    'setting_note_minutely_limit' => 'Лимит просмотров для 1 посетителя за 1 минуту.',
    'setting_note_hourly_limit' => 'Лимит просмотров для 1 посетителя за 1 час.',
    'setting_note_daily_limit' => 'Лимит просмотров для 1 посетителя за 1 день.',
    'setting_label_filter_cookie' => 'Cookie',
    'setting_label_filter_session' => 'Сессия',
    'setting_note_filter_session' => 'Определить, были ли созданы несколько сессий одним и тем же посетителем.',
    'setting_label_filter_referer' => 'Referrer',
    'setting_note_filter_referer' => 'Проверить информацию о реферере HTTP.',
    'setting_label_quota' => 'Квота',
    'setting_note_quota' => 'Посетитель, достигший этого лимита, будет временно заблокирован..',
    'setting_label_buffered_time' => 'Отложенная проверка',
    'setting_note_buffered_time' => 'Начните использовать этот фильтр через "N" секунд после первого посещения вашего сайта.',
    'setting_label_cookie_name' => 'Название Cookie-переменной',
    'setting_note_cookie_name' => 'Только английские символы.',
    'setting_label_cookie_value' => 'Cookie значение',
    'setting_label_cookie_domain' => 'Cookie домен',
    'setting_text_leave_blank' => 'Just leave it blank to apply default.',
    'setting_heading_deny_attempts' => 'Запретить попытки', // Попытки блокировки
    'setting_desc_deny_attempts' => 'Попрощайтесь с посетителями, которые плохо себя ведут.',
    'setting_label_system_firewall' => 'Системный Firewall',
    'setting_note_install_iptables' => 'Убедитесь, что вы уже установили <strong>iptables</strong> и <strong>ip6tables</strong> на вашем сервере, и правильно используете <strong>iptables_bridge.sh</strong> в <strong>crontab</strong>.',
    'setting_label_watching_folder' => 'Папка для наблюдения',
    'setting_label_cronjob' => 'Cron-задание',
    'setting_note_cronjob' => 'Используйте этот код в crontab на вашем сервере.',
    'setting_note_iptables' => '<strong> iptables_bridge.sh </strong> будет отслеживать изменения в этой папке, чтобы использовать команды для iptables.',
    'setting_note_iptables_bridge' => 'Переместите <strong> iptables_bridge.sh </strong> в безопасное место, доступное только вам, изменив путь в целях безопасности.',
    'setting_label_deny_attempt_buffer' => 'Буфер',
    'setting_desc_deny_attempt_buffer' => 'Сколько неудачных попыток подряд вызовет это событие.',
    'setting_label_record_attempt_detection_period' => 'Период обнаружения',
    'setting_desc_record_attempt_detection_period' => 'Провяется разница во времени между настоящим моментом и последней неудачной попыткой. Попытки неудач в пределах разницы во времени будут записаны. Чем больше значение этого поля, тем строже. (единица измерения: секунда)',
    'setting_label_record_attempt_reset' => 'Сбросить',
    'setting_desc_record_attempt_reset' => 'Сбросить счетчик через "N" секунд.',
    'setting_button_choose_file' => 'Выбрать файл',
    'setting_note_import' => 'Выберите файл .json, экспортированный ранее..',
    'setting_button_export' => 'Экспорт',
    'setting_button_import' => 'Импорт',
    'setting_label_unique_ip_only' => 'Уникальный IP',
    'setting_note_unique_ip_only' => 'Разрешить только один сеанс на IP-адрес.',
    'setting_note_unique_ip_only_2' => 'Пользователи с несколькими сеансами будут исключены.',

    // Added at 8/19/2020
    'setting_heading_dialog_information' => 'Раскрытие информации',
    'setting_label_dialog_user_inforamtion' => 'Информация о пользователе',
    'setting_note_dialog_user_inforamtion' => 'Отображать IP-адрес, rDNS и User-Agent.',

    'setting_label_dialog_http_status' => 'Код HTTP статуса',
    'setting_note_dialog_http_status' => 'Отображать код HTTP статуса пользователю.', 

    'setting_label_dialog_reason_code' => 'Код причины',
    'setting_note_dialog_reason_code' => 'Отображать код причины, вызывающей блокировку пользователя.',

    'setting_label_dialog_reason_text' => 'Текст причины',
    'setting_note_dialog_reason_text' => 'Отображать текст причины, вызывающей блокировку пользователя.',
    'setting_note_dialog_reason_notice' => 'Не рекомендуется отображать такую информацию, люди с плохими намерениями могут узнать, как пройти через защиту.',

    'setting_label_dialog_user_amount' => 'Количество пользователей онлайн',
    'setting_note_dialog_user_amount' => 'Отображение общего количества онлайн-пользователей в диалоговом окне ограничения сеанса.',

    // Messenger
    'messenger_heading_events' => 'События',
    'messenger_desc_events' => 'О каких событиях вы хотели бы получать уведомления, отправляемые модулями Уведомлений.',
    'messenger_label_event_1' => 'Блокировка пользователя в текущем Жизненном цикле.',
    'messenger_desc_event_1' => 'Это событие обычно срабатывает, когда пользователь проваливает слишком много CAPTCHA подряд.',
    'messenger_label_event_2' => 'Блокировка пользователя навсегда в системном Firewall',
    'messenger_desc_event_2' => 'Это событие обычно срабатывает, когда пользователь уже заблокирован в текущем жизненном цикле, но он по-прежнему обращается к страницам предупреждений слишком много раз подряд - мы можем сделать вывод, что это вредоносные боты.',
    'messenger_desc_event_3' => 'Этот параметр вступит в силу только в том случае, если вы правильно настроили брандмауэр системного уровня..',
    'messenger_heading_telegram' => 'Telegram',
    'messenger_label_api_key' => 'API ключ',
    'messenger_label_channel' => 'Канал',
    'messenger_heading_linenotify' => 'Line Notify',
    'messenger_label_access_token' => 'Токен доступа',
    'messenger_heading_sendgrid' => 'SendGrid',
    'messenger_label_sender' => 'Отправитель',
    'messenger_label_recipients' => 'Получатели',
    'messenger_label_host' => 'Хост',
    'messenger_label_port' => 'Порт',
    'messenger_label_user' => 'Пользователь',
    'messenger_label_pass' => 'Пароль',
    'messenger_label_type' => 'Тип',
    'messenger_heading_mailgun' => 'MailGun',
    'messenger_heading_smtp' => 'SMTP',
    'messenger_heading_php_mail' => 'PHP-функция mail()',
    'messenger_label_webhook_url' => 'Webhook URL',
    'messenger_label_bot_token' => 'Bot Token',
    'messenger_heading_slack' => 'Slack',
    'messenger_heading_slack_webhook' => 'Slack Webhook',
    'messenger_heading_rocket_chat' => 'Rocket Chat',
    'messenger_label_server_url' => 'URL сервера',

    'tab_heading_events' => 'События',
    'tab_heading_modules' => 'Модули',
    'tab_heading_iptables_status' => 'Статус',

    'error_ip6tables_directory_not_writable' => 'Папка отслеживания iptables требует, чтобы каталог хранилища был доступен для записи.',

    'iptable_heading' => 'iptables Менеджер',
    'iptable_description_1' => 'Это веб-интерфейс <strong> iptables </strong>, будьте осторожны при использовании этой функции..',
    'iptable_description_2' => 'Здесь вы можете управлять только входящими запросами.',
    'iptable_description_3' => 'После перезагрузки сервера правила здесь исчезнут. Самостоятельное использование <strong> iptables-save </strong> для сохранения правил.',
    'ip6table_description_1' => 'Это веб-интерфейс <strong> ip6tables </strong>, будьте осторожны при использовании этой функции.',
    'ip6table_description_2' => 'Здесь вы можете управлять только входящими запросами.',
    'ip6table_description_3' => 'После перезагрузки сервера правила здесь исчезнут. Используя <strong> ip6tables-save </strong>, вы сохраняете правила.',
    'iptables_label_subnet' => 'Подсеть',
    'iptables_label_port' => 'Порт',
    'iptables_label_port_custom' => 'Произвольный',
    'iptables_label_protocol' => 'Протокол',
    'iptables_label_protocol_all' => 'Все',
    'iptables_label_protocol_tcp' => 'TCP',
    'iptables_label_protocol_udp' => 'UDP',
    'iptables_label_action_allow' => 'разрешить',
    'iptables_label_action_deny' => 'запретить',
    'iptable_status_description' => 'Следующий текст является результатом команды <code>iptables -L</code>.',
    'ip6table_status_description' => 'Следующий текст является результатом команды <code>ip6tables -L</code>.',

    'reset_data_circle' => 'Жизненый цикла был сброшен.',
    'reset_action_logs' => 'Журнал действий был очищен.',

    'operation_note_useragent' => 'Блокировать запросы без информации о user-agent.',
    'operation_note_rdns' => 'Блокировать запросы без записи RDNS.',
    'operation_note_header' => 'Блокировать запросы без основных заголовков.',
    'operation_note_trustedbot' => 'Блокировать запросы, которые определены как поддельные поисковые системы..',
    'operation_note_ip' => 'Блокировать запросы с помощью правил, установленных в IP Менеджере.',

    'login_heading_login' => 'Вход в панель Firewall.',
    'login_btn_login' => 'Войти',
    'login_message_invalid_captcha' => 'Некорректно разгадана Captcha',
    'login_message_invalid_user_or_pass' => 'Неправильное имя пользователя или пароль.',

    'test_msg_title' => 'Тестовое сообщение от хоста: ',
    'test_msg_body' => 'Модуль уведомлений {0} был протестирован и успешно подтвержден.',
];
