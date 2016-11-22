<?php

// Date.timezone
if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Shanghai');
}
// Display errors.
ini_set('display_errors', 'on');
// Reporting all.
error_reporting(E_ALL);

// For onError callback.
define('WORKERMAN_CONNECT_FAIL', 1);
// For onError callback.
define('WORKERMAN_SEND_FAIL', 2);

// Compatible with php7
if(!class_exists('Error'))
{
    class Error extends Exception
    {
    }
}
