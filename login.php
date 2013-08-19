<?php
require_once ('include/start.php');
//var_dump(session_status());
$request = array();
#$method='get';
var_dump($_GET);
var_dump($_POST);
if(isset($_GET['act'])){
    $request = $_GET;
    $method = 'get';
}
elseif(isset($_POST['act'])){
    $request = $_POST;
    $method = 'post';
}
var_dump($method);
if($method == 'get'){
    ?>
    <form action="login.php" method='post'>
    请输入用户名<input type='text' id='username'/>
    请输入密码<input type='password' id='pass'/>
    <input type='submit' value='提交'/>
    <input type='hidden' id='act' value='post'>
    </form>
   <?php 
}
else{
var_dump($request);exit;
    $username= !empty($_POST['username']) ?  trim($_POST['username']): '';
    $pass = !empty($request['pass']) ? trim($request['pass']) : '';
    if($username ===NULL || $pass === NULL){
        echo '请输入用户名和密码！';
        exit;
    }
echo $username."\n".$pass."\n";
    $con = mysql_connect($g_db['host'], $g_db['user'], $g_db['pass']) or die('connect failed'.  mysql_error());
    mysql_select_db('tryingzone') or die('database selected failed');
    $sql = 'select userId,username from user where username="'.$username .'" and password="'.md5($pass).'"';
echo $sql;
    $res = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_row($res);
    mysql_close();
    if ($row && count($row) > 0){
        $_SESSION['username'] = trim($row['username']);
        echo '登录成功！3秒后返回首页';
        sleep(3);
        header('location:index.php');
    }
    else{
        echo "登录失败，请正确输入用户名和密码！";
        exit;
    }
}
?>
