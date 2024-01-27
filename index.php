<?php
//start session
session_start();
//config
define('BASE_PATH', __DIR__);
define('CURRENT_DOMAIN', currentDomain().' /weblog/' );
define('DISPLAY_ERROR', true);
define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
