<?php

if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) {
  # IMPORTANT: ensure your local config does not include wp-settings.php
  require_once(dirname(__FILE__) . '/wp-config-local.php');
} else {
  // Don't show deprecations; useful under PHP 5.5
  error_reporting(E_ALL ^ E_DEPRECATED);

  define('DB_NAME',          getenv('DB_NAME') );
  define('DB_USER',          getenv('DB_USER') );
  define('DB_PASSWORD',      getenv('DB_PASS') );
  define('DB_HOST',          getenv('DB_HOST') );
  define('DB_CHARSET',       'utf8');
  define('DB_COLLATE',       '');
  $table_prefix  = 'wp_';
  define('WPLANG', '');
  define('WP_DEBUG', false);

  /* That's all, stop editing! Happy blogging. */
}

define('AUTH_KEY',         'key');
define('SECURE_AUTH_KEY',  'key');
define('LOGGED_IN_KEY',    'key');
define('NONCE_KEY',        'key');
define('AUTH_SALT',        'key');
define('SECURE_AUTH_SALT', 'key');
define('LOGGED_IN_SALT',   'key');
define('NONCE_SALT',       'key');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
