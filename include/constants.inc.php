<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
switch($_SERVER['HTTP_HOST']){
    case 'localhost':
        define ('HOST', 'localhost');
        define ('PORT', 3306);
        define ('DATA', 'mediacity');
        define ('USER', 'root');
        define ('PASS', '');
        break;
    case 'autre chose':
        define ('HOST', '');
        define ('DATA', '');
        define ('USER', '');
        define ('PASS', '');
        break;
    default:
}

//mediacity-ali.000webhostapp.com