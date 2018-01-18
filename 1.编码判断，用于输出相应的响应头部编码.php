<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:49
 */
if (isset($_GET['charset']) && !empty($_GET['charset'])) {
    $charset = $_GET['charset'];
    if (strcasecmp($charset, "gbk") == 0) {
        $content = mb_convert_encoding($content, 'gbk', 'utf-8');
    }
} else {
    $charset = 'utf-8';
}
header("Content-Type: text/html; charset=$charset");