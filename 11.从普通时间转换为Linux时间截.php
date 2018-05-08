<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:23
 */

/**
 * 从普通时间转换为Linux时间截
 * @param     string $dtime 普通时间
 * @return    string
 */
function GetMkTime($dtime)
{
    if (!preg_match("/[^0-9]/", $dtime)) {
        return $dtime;
    }
    $dtime = trim($dtime);
    $dt    = Array(1970, 1, 1, 0, 0, 0);
    $dtime = preg_replace("/[\r\n\t]|日|秒/", " ", $dtime);
    $dtime = str_replace("年", "-", $dtime);
    $dtime = str_replace("月", "-", $dtime);
    $dtime = str_replace("时", ":", $dtime);
    $dtime = str_replace("分", ":", $dtime);
    $dtime = trim(preg_replace("/[ ]{1,}/", " ", $dtime));
    $ds    = explode(" ", $dtime);
    $ymd   = explode("-", $ds[0]);
    if (!isset($ymd[1])) {
        $ymd = explode(".", $ds[0]);
    }
    if (isset($ymd[0])) {
        $dt[0] = $ymd[0];
    }
    if (isset($ymd[1])) {
        $dt[1] = $ymd[1];
    }
    if (isset($ymd[2])) {
        $dt[2] = $ymd[2];
    }
    if (strlen($dt[0]) == 2) {
        $dt[0] = '20' . $dt[0];
    }
    if (isset($ds[1])) {
        $hms = explode(":", $ds[1]);
        if (isset($hms[0])) {
            $dt[3] = $hms[0];
        }
        if (isset($hms[1])) {
            $dt[4] = $hms[1];
        }
        if (isset($hms[2])) {
            $dt[5] = $hms[2];
        }
    }
    foreach ($dt as $k => $v) {
        $v = preg_replace("/^0{1,}/", '', trim($v));
        if ($v == '') {
            $dt[$k] = 0;
        }
    }
    $mt = mktime($dt[3], $dt[4], $dt[5], $dt[1], $dt[2], $dt[0]);
    if (!empty($mt)) {
        return $mt;
    } else {
        return time();
    }
}