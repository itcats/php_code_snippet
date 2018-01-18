<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:52
 */
function logs($contents){
    $dirs = '/var/www/dev/openadmin/logs/'.date("Y-m-d");
    if(!is_dir($dirs)){
        mkdir($dirs, 0777, true);
    }
    $contents = date("[Y-m-d H:i:s]").$contents."\n";
    error_log($contents, 3, $dirs."/rz_history.txt");
}

/**
/var/www/dev/openadmin/logs/  日志位置
/rz_history.txt  日志名
**/