<?php
require_once ('include/start.php');
$smarty->display('common_header.tpl');
$request = array();
$method='get';
if(isset($_GET['act'])){
    $request = $_GET;
    $method = 'get';
}
elseif(isset($_POST['act'])){
    $request = $_POST;
    $method = 'post';
}
if($method == 'get'){
    ?>
    <form action="login.php" method='post'>
    请输入用户名<input type='text' id='username'name="username"/>
    请输入密码<input type='password' id='pass' name="pass"/>
    <input type='hidden' name="act" value='post'>
    <input type='submit' value='提交'/>
    </form>
   <?php 
}
else{
    $username= !empty($_POST['username']) ?  trim($_POST['username']): '';
    $pass = !empty($request['pass']) ? trim($request['pass']) : '';
    if($username =='' || $pass ==''){
        ?>
        <script>
            alert('请输入用户名和密码');
            window.history.go(-1);
        </script>
        <?php
    }
    $con = mysql_connect($g_db['host'], $g_db['user'], $g_db['pass']) or die('connect failed'.  mysql_error());
    mysql_select_db('tryingzone') or die('database selected failed');
    $sql = 'select userId,username from user where username="'.$username .'" and password="'.md5($pass).'"';
    $res = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_array($res);
    mysql_close();
    if ($row && count($row) > 0){
        $_SESSION['username'] = trim($row['username']);
        echo '登录成功！3秒后返回首页';#exit;
        sleep(3);
        header('location:index.php');
    }
    else{
        echo "登录失败，请正确输入用户名和密码！";
        exit;
    }
}
$smarty->display('common_footer.tpl');
?>
