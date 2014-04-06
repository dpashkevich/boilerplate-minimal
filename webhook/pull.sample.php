<?php
header("Content-Type:text/plain");
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
define('PROJECT_PATH', '/var/www/example.com/www/src/');

// print exec('whoami') . "\n";
if($_POST['payload']) {
    shell_exec('cd ' . PROJECT_PATH . ' && umask 0002 && /usr/local/bin/git pull');
}
