<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:25
 */

/**
 *  获得当前的脚本网址
 * @return    string
 */
function GetCurUrl()
{
    if (!empty($_SERVER["REQUEST_URI"])) {
        $scriptName = $_SERVER["REQUEST_URI"];
        $nowurl     = $scriptName;
    } else {
        $scriptName = $_SERVER["PHP_SELF"];
        if (empty($_SERVER["QUERY_STRING"])) {
            $nowurl = $scriptName;
        } else {
            $nowurl = $scriptName . "?" . $_SERVER["QUERY_STRING"];
        }
    }
    return $nowurl;
}