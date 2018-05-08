<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:28
 */

/**
 *  将时间转换为距离现在的精确时间
 * @param     int $seconds 秒数
 * @return    string
 */
function FloorTime($seconds)
{
    $times   = '';
    $days    = floor(($seconds / 86400) % 30);
    $hours   = floor(($seconds / 3600) % 24);
    $minutes = floor(($seconds / 60) % 60);
    $seconds = floor($seconds % 60);
    if ($seconds >= 1) {
        $times .= $seconds . '秒';
    }
    if ($minutes >= 1) {
        $times = $minutes . '分钟 ' . $times;
    }
    if ($hours >= 1) {
        $times = $hours . '小时 ' . $times;
    }
    if ($days >= 1) {
        $times = $days . '天';
    }
    if ($days > 30) {
        return false;
    }
    $times .= '前';
    return str_replace(" ", '', $times);
}