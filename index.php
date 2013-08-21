<?php
require_once ('include/start.php');
?>
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
if(isset($_SESSION['username']) && $_SESSION['username']){
echo "hello,".$_SESSION['username']."</br>";
}
echo "now is ".date('Y-m-d H:i:s')."</br>";
echo "Hey buddy!Welcome to www.tryingzone.com!This is my website which records my way to PHP Senior Develop Engineer.</br>";
try {
    $dbLink = mysqli_connect($g_db['host'], $g_db['user'], $g_db['pass'], $g_db['name'], '3306');
    mysqli_query($dbLink, 'set names utf8');
    $sql = 'select * from article';
    $res = mysqli_query($dbLink, $sql);
    echo "<form>\n";
    echo "<table><tr><th>编号</th><th>标题</th></tr>";
    while ($row = mysqli_fetch_array($res)){
        echo "<tr><td>".$row['id']."</td>"."<td><a href=\"phpstudy/articleList.php?id=".$row['id']."\">".$row['title']."</td></tr>";
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
echo "</table>\n";
echo "</form>\n";
if (!isset($_SESSION['username']) ){
echo "<a href ='login.php'>登录</a>";
    
}else{
    echo "<a href='phpstudy/addArticle.php?act=add'>发布笔记</a>";
}

?>

</body>
</html>
