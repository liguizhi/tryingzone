<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="闯赢族,我的闯赢之路,PHP学习日记">
<meta name="keywords" content="闯赢族,PHP,PHP学习,李桂智,李桂智的个人站点"/>
<title>闯赢族——李桂智的闯赢之路</title>
</head>
<body>
<?php
echo "now is ".date('Y-m-d H:i:s')."</br>";
echo "Hey buddy!Welcome to www.tryingzone.com!This is my website which records my way to PHP Senior Develop Engineer.</br>";
?>
<h2>2013-08-14的学习笔记</h2>
<p>
今天学习了下董楠的个人网站www.idongnan.cn，颇受震撼，惊奇之余决定自己也搭建一个个人网站，以后作为学习PHP日记的发布站点，也供以后个人翻阅。
<br>     在阿里云购买了一年的基础服务器，使用ubuntu12.04的系统，配置了apache、php、mysql服务。
<br>     把之前托管在西部数码的www.tryingzone.com域名解析到新购的服务器（公网ip：112.124.4.163）。

<br>	1. 在学习服务器的配置中，查阅资料修改了httpd.conf的配置，使默认首页改为index.php，修改内容如下：

<br>     &lt;Directory /&gt;
<br>    Options FollowSymLinks
<br>    DirectoryIndex index.php index.html
<br>    AllowOverride All
<br>    Order deny,allow
<br>    Allow from all
<br>     &lt;/Directory&gt;
<br>     2.  默认安装的mysql用户root密码为空，使用mysqladmin -u root password '****' 命令给root用户增加密码
<br>     3.  创建tryingzone数据库并增加user表
<br>     4.  写了一个简单的index.php欢迎页，作为新的开始页面

</p>
</body>
</html>
