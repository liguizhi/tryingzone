<?php
require_once ('include/start.php');
$smarty->display('common_header.tpl');
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
$smarty->display('common_footer.tpl');
?>