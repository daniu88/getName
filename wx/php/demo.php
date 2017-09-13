<?php


// define('TOKEN', 'weixin');

// // you must define TOKEN by yourself
// if (!defined("TOKEN")) {
//     throw new Exception('TOKEN is not defined!');
// }

// $signature = $_GET["signature"];
// $timestamp = $_GET["timestamp"];
// $nonce = $_GET["nonce"];
        
// $token = TOKEN;
// $tmpArr = array($token, $timestamp, $nonce);
// // use SORT_STRING rule
// sort($tmpArr, SORT_STRING);
// $tmpStr = implode( $tmpArr );
// $tmpStr = sha1( $tmpStr );

// $echoStr = $_GET["echostr"];

// if( $tmpStr == $signature ){
//     echo $echoStr;
// }



// exit;

include_once "wxBizMsgCrypt.php";

file_put_contents('./db.txt',json_encode($_GET));

// 第三方发送消息给公众平台
$encodingAesKey = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFG";
$token = "weixin";
$timeStamp = "1409304348";
$nonce = "xxxxxx";
$appId = "wxb11529c136998cb6";
$text = "<xml><ToUserName><![CDATA[oia2Tj我是中文jewbmiOUlr6X-1crbLOvLw]]></ToUserName><FromUserName><![CDATA[gh_7f083739789a]]></FromUserName><CreateTime>1407743423</CreateTime><MsgType><![CDATA[video]]></MsgType><Video><MediaId><![CDATA[eYJ1MbwPRJtOvIEabaxHs7TX2D-HV71s79GUxqdUkjm6Gs2Ed1KF3ulAOA9H1xG0]]></MediaId><Title><![CDATA[testCallBackReplyVideo]]></Title><Description><![CDATA[testCallBackReplyVideo]]></Description></Video></xml>";


$pc = new WXBizMsgCrypt($token, $encodingAesKey, $appId);
$encryptMsg = '';
$errCode = $pc->encryptMsg($text, $timeStamp, $nonce, $encryptMsg);
if ($errCode == 0) {
	print("加密后: " . $encryptMsg . "\n");
} else {
	print($errCode . "\n");
}

$xml_tree = new DOMDocument();
$xml_tree->loadXML($encryptMsg);
$array_e = $xml_tree->getElementsByTagName('Encrypt');
$array_s = $xml_tree->getElementsByTagName('MsgSignature');
$encrypt = $array_e->item(0)->nodeValue;
$msg_sign = $array_s->item(0)->nodeValue;

$format = "<xml><ToUserName><![CDATA[toUser]]></ToUserName><Encrypt><![CDATA[%s]]></Encrypt></xml>";
$from_xml = sprintf($format, $encrypt);

// 第三方收到公众号平台发送的消息
$msg = '';
$errCode = $pc->decryptMsg($msg_sign, $timeStamp, $nonce, $from_xml, $msg);
if ($errCode == 0) {
	print("解密后: " . $msg . "\n");
} else {
	print($errCode . "\n");
}
