<?php
require_once ('include/start.php');
try {
$dbLink = mysql_connect($g_db['host'],$g_db['user'],$g_db['pass']) or die('not connected');
mysql_select_db('tryingzone',$dbLink) or die('no database selected'.mysql_error());
mysql_query('set names utf8');
$sql = 'select * from article';
$res = mysql_query($sql);
echo "<form>\n";
echo "<table><th><td>编号</td><td>标题</td><th>";
while ($row = mysql_fetch_row($res)){
    echo "<tr><td>".$row['id']."</td>"."<td>".$row['title']."</td></tr>";
}
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
echo "</table>\n";
echo "</form>\n";
if (!isset($_SESSION['userId']) ){
echo "<a href ='login.php'>登录</a>";
    
}

?>
