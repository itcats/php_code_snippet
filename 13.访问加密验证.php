<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:25
 */

define('ADMIN_USERNAME', 'admin');    // Admin Username
define('ADMIN_PASSWORD', '123456');    // Admin Password
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] != ADMIN_USERNAME || $_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD) {
    Header("WWW-Authenticate: Basic realm=\"discuz Login\"");
    Header("HTTP/1.0 401 Unauthorized");

    echo <<<EOB
                <html><body>
                <h1>Rejected!</h1>
                <big>Wrong Username or Password!</big>
                </body></html>
EOB;
    exit;
}