<?php
/**
 * @Created by PhpStorm
 * @Author  : itcats
 * @Use     code in php_code_snippet
 * @Date    :   2018-05-08 11:26
 */

/*获取微信信息*/
$APPID     = "***";
$APPSECRET = "***";
$code      = $_GET['code'];

//获取access_token
$url          = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $APPID . "&secret=" . $APPSECRET . "&code=" . $code . "&grant_type=authorization_code";
$access_token = file_get_contents($url);
$RESULT       = json_decode($access_token, 1);
$accessToken  = $RESULT['access_token'];
$openid       = $RESULT['openid'];
if (!$accessToken) {
    echo json_encode($RESULT);
    exit;
}
$wxinfo = file_get_contents("https://api.weixin.qq.com/sns/userinfo?access_token=" . $accessToken . "&openid=" . $openid . "&lang=zh_CN");

$info = json_decode($wxinfo, 1);

$nickname = $info['nickname'];