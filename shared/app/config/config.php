<?php
  // DB Params
  define('DB_HOST', apache_getenv["HOST_NAME"]);
  define('DB_USER', apache_getenv["DB_USER"]);
  define('DB_PASS', apache_getenv["DB_PASS"]);
  define('DB_NAME',  apache_getenv["DB_NAME"]);

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', apache_getenv["ROOT_URL"]);
  // Site Name
  define('SITENAME', 'Shared');
  // App Version
  define('APPVERSION', '1.0.0');
  