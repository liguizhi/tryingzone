<?php
require_once ('../include/start.php');
$smarty->display('common_header.tpl');
if(isset($_GET['id'])){
    $id = intval(trim($_GET['id']));
    $con = mysqli_connect($g_db['host'], $g_db['user'], $g_db['pass'], $g_db['name'], '3306');
    mysqli_query($con, 'set names utf8');
    $sql = 'SELECT * FROM article WHERE id='.$id;
    $res = mysqli_query($con, $sql);
    $article = mysqli_fetch_array($res);
    ?>
    <div><div><h2>标题</h2><line></div>
        <?php echo $article['title'];?>
    </div>
    <div><div><h2>内容</h2><line></div>
        <?php echo $article['content'];?>
    </div>
    <?php
}else{
    echo ('请正确访问 本页面！');
    exit;
}
$smarty->display('common_footer.tpl');
?>
