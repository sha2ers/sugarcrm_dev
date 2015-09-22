<?php

$sugar_config_si = array (
    'setup_db_host_name' => trim($_ENV['OPENSHIFT_MYSQL_DB_HOST']).':'.trim($_ENV['OPENSHIFT_MYSQL_DB_PORT']),
    'setup_db_database_name' => $_ENV['OPENSHIFT_APP_NAME'],
    'setup_db_drop_tables' => true,
    'setup_db_create_database' => false,
    'setup_site_admin_user_name' => 'admin',
    'setup_site_admin_password' => 'rote=-db/dt',
    'setup_db_create_sugarsales_user' => false,
    'setup_db_admin_user_name' => $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
    'setup_db_admin_password' => $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
    'setup_license_key_users' => 1,
    'setup_license_key_expire_date' => '2010-12-12',
    'setup_license_key_oc_licences' => 0,
    'setup_license_key' => 'sugar',
    'setup_site_url' => 'http://'.$_ENV['OPENSHIFT_APP_DNS'],
    'dbUSRData' => 'same',
    'setup_db_sugarsales_user' => $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
    'setup_db_sugarsales_password' => $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
    'setup_db_type' => 'mysql',
    'setup_system_name' => $_ENV['OPENSHIFT_APP_NAME'],
    'default_currency_iso4217' => 'EUR',
    'default_currency_name' => 'Euros',
    'default_currency_significant_digits' => '2',
    'default_date_format' => 'd/m/Y',
    'default_time_format' => 'h:ia',
    'default_decimal_seperator' => ',',
    'default_export_charset' => 'UTF-8',
    'default_language' => 'fr_FR',
    'default_locale_name_format' => 's f l',
    'default_number_grouping_seperator' => '',
    'export_delimiter' => ',',
    'demoData' => 'no',
    'setup_site_sugarbeet_anonymous_stats' => '1',
    'setup_site_sugarbeet_automatic_checks' => '1',
    'setup_site_specify_guid' => '0',
    'setup_site_guid' => 'auto',
    );
