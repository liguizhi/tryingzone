<?php
/* 设置输出流字符编码 */
header('Content-type: text/html;charset=utf-8');

/* 设置时区 */
date_default_timezone_set('Asia/Shanghai');
define("APP_PATH", realpath(dirname(__FILE__) . '/../'));//指向public到上一级
$app = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();