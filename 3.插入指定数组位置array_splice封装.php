<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:50
 */
function array_insert(&$array, $position, $insert_array) {
    $first_array = array_splice($array, 0, $position);
    $array       = array_merge($first_array, $insert_array, $array);
}

/* 示例 */
$arr = array(
    'tt'  => 1333,
    'cc'  => 333,
    'aaz' => 2333,
    'ee'  => 78,
);
$temp["bb"] = 33;
array_insert($arr, 1, $temp);
var_dump($arr);