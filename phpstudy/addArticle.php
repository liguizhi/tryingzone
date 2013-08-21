<?php
require_once ('../include/start.php');
if(isset($_GET['act'])){
    $method = 'get';
    $request = $_GET;
}
elseif($_POST['act']){
    $method = 'post';
    $request = $_POST;
}

if($method == 'get'){
    ?>
    <form action="addArticle.php" method="post">
        <div>标题<input type="text" name="title"/></div>
        <div>内容<br>
            <textarea cols="100" rows="30" name="content"></textarea>
        </div>
        <div><input type="submit" value="提交"><input type="reset" value="重置"><input type="hidden" name="act" value="add"></div>
    </form>
    <?php
}
elseif($method == 'post'){
    $title = isset($request['title']) ? trim($request['title']) : '';
    $content = isset($request['content']) ? trim($request['content']) : '';
    if(empty($title)||empty($content)){
        ?>
        <script>
            alert('请输入标题和内容！');
            window.history.go(-1);
        </script>
        <?php
    }
    else{
        $con = mysqli_connect($g_db['host'], $g_db['user'], $g_db['pass'], $g_db['name'], '3306');
        $sql = 'INSERT INTO article (title,content) values("'.$title.'","'.$content.'")';
        mysqli_query($con, $sql);
        if(mysqli_affected_rows($con)>0){
        ?>
        <script>
            alert('插入成功！');
            self.location='../index.php';
        </script>
        <?php
        }
    }
}
?>