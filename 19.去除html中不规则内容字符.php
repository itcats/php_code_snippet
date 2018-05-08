<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:30
 */

/**
 *  去除html中不规则内容字符
 * @access    public
 * @param     string $str    需要处理的字符串
 * @param     string $rptype 返回类型
 *                           $rptype = 0 表示仅替换 html标记
 *                           $rptype = 1 表示替换 html标记同时去除连续空白字符
 *                           $rptype = 2 表示替换 html标记同时去除所有空白字符
 *                           $rptype = -1 表示仅替换 html危险的标记
 * @return    string
 */
function HtmlReplace($str, $rptype = 0)
{
    $str = stripslashes($str);
    $str = preg_replace("/<[\/]{0,1}style([^>]*)>(.*)<\/style>/i", '', $str);//2011-06-30 禁止会员投稿添加css样式 (by:织梦的鱼)
    if ($rptype == 0) {
        $str = dede_htmlspecialchars($str);
    } else {
        if ($rptype == 1) {
            $str = dede_htmlspecialchars($str);
            $str = str_replace("　", ' ', $str);
            $str = preg_replace("/[\r\n\t ]{1,}/", ' ', $str);
        } else {
            if ($rptype == 2) {
                $str = dede_htmlspecialchars($str);
                $str = str_replace("　", '', $str);
                $str = preg_replace("/[\r\n\t ]/", '', $str);
            } else {
                $str = preg_replace("/[\r\n\t ]{1,}/", ' ', $str);
                $str = preg_replace('/script/i', 'ｓｃｒｉｐｔ', $str);
                $str = preg_replace("/<[\/]{0,1}(link|meta|ifr|fra)[^>]*>/i", '', $str);
            }
        }
    }
    return addslashes($str);
}