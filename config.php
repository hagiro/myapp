<?php

session_start();

define('DSN', 'mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_475bc4d54b850;charset=utf8mb4');
define('DB_USER', 'b073d324f2ec96');
define('DB_PASS', 'b4a1a844');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

spl_autoload_register(function ($class) {
  $prefix = 'MyApp\\';

  if (strpos($class, $prefix) === 0) {
    
    $fileName = sprintf(__DIR__ . '/%s.php', substr($class, strlen($prefix)));

    if (file_exists($fileName)) {
      require($fileName);
    } else {
      echo 'File not found: ' . $fileName;
      exit;
    }
  }
});