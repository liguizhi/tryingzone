<?php
$cfg['baseUrl'] = '/';
$cfg['rootDir'] = str_replace('\\', '/', str_replace('include', '', dirname(__FILE__)));
$cfg['pathDivider'] = preg_match('/WIN/i', PHP_OS) ? ';' : ':';
ini_set('include_path', $cfg['rootDir'].$cfg['pathDivider'].$cfg['rootDir'].'include'.$cfg['pathDivider']);
/* 设置输出流字符编码 */
header('Content-type: text/html;charset=utf-8');
include_once('config/config.php');
include_once('core/lib_common.func.php');
/*初始化session*/
session_cache_limiter('private, must-revalidate');
session_start();
/* 错误级别*/
error_reporting(E_ALL);
/* 使用自定义异常处理类*/
set_exception_handler("exceptionHandler");
?>

