<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-01-18 20:53
 */
$sort = array_column($list, 'pubdate');
array_multisort($sort, SORT_DESC, $list);