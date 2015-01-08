<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//定义项目名称
define('APP_NAME','App');
//定义项目路径
define('APP_PATH','./App/');

define('THINK_PATH','./ThinkPHP/');

define('APP_DEBUG',TRUE); 
//加载框架入文件
define('PREV_URL',$_SERVER["HTTP_REFERER"]);
require THINK_PATH.'ThinkPHP.php';
	
?>