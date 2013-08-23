<?php
$cfg['baseUrl'] = '/';
$cfg['rootDir'] = str_replace('\\', '/', str_replace('include', '', dirname(__FILE__)));
$cfg['pathDivider'] = preg_match('/WIN/i', PHP_OS) ? ';' : ':';
ini_set('include_path', $cfg['rootDir'].$cfg['pathDivider'].$cfg['rootDir'].'include'.$cfg['pathDivider']);
/* 设置输出流字符编码 */
header('Content-type: text/html;charset=utf-8');
require_once ('config/config.php');
require_once ('core/lib_common.func.php');
require_once ('smarty/Smarty.class.php');
/*初始化session*/
session_cache_limiter('private, must-revalidate');
session_start();
/* 错误级别*/
error_reporting(E_ALL);
/* 使用自定义异常处理类*/
set_exception_handler("exceptionHandler");
//初始化smarty
$smarty = new Smarty();  //建立smarty实例对象$smarty
//$smarty->setTemplateDir($cfg['rootDir']."template");
$smarty->template_dir = $cfg['rootDir']."template"; //设置模板目录
$smarty->cache_dir = $cfg['rootDir']."template/cache"; //设置缓存目录
$smarty->compile_dir = $cfg['rootDir']."template/compiled"; //设置编译目录
$smarty->compile_check = TRUE;
?>

