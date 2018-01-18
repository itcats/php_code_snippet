<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:56
 */
function list_level($arr, $pid = 0, $lev = 0) {
    $data = array();
    foreach ($arr as $k => $v) {
        if ($v['pid'] == $pid) {
            $v['level'] = $lev;
            $data[]     = $v;
            $data       = array_merge($data, $this->list_level($arr, $v['id'], $lev + 1));
        }
    }
    return $data;
}