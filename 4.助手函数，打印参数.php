<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:51
 */
function pr($content) {
    echo '<pre>';
    if (is_array($content)) {
        print_r($content);
    } else {
        var_dump($content);
    }
    echo '</pre>';
    die();
}