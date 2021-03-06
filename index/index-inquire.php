<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/article-list.css" media="screen"/>
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="nav-background">
    <div id="canvas" class="gradient"></div>
    <div id="transparent"></div>
    <div class="nav fix">
        <ul class="nav-ul">
            <li class="nav-left">
                <a href="#">
                    <img src="../icon/QQ图片20151123171438.jpg">
                </a>
            </li>
            <li class="nav-li"><a href="#footer">关于我</a> </li>
            <li class="nav-li"><a href="../article-category.php">分类</a> </li>
            <li class="nav-li"><a href="../article-list.php">文章</a> </li>
            <li class="nav-li"><a href="../index.php">首页</a> </li>
        </ul>
        <div id="sidebar">
            <img src="../icon/iconfont-liebiao%20(2).svg" height="30px">
        </div>
        <div id="sidebar-detail" >
            <ul>
                <li><a href="../index.php">首页</a></li>
                <li><a href="../article-list.php"> 文章列表</a></li>
                <li><a href="../article-category.php"> 文章分类</a></li>
                <li><a href="#footer">关于我</a></li>
            </ul>
        </div>
        <img src="../icon/shadow-separator-wide-bottom.png" width="100%" height="5px">
    </div>
</div>
    <div id="container">
        <ul  id="article_classification">
            <?php
            include '../config.php';
            $content = $_GET['content'];
            if($content==""){
                echo '<script>
                function pageJump(){
                    window.location.assign("../index.php");
                }
                </script>';
            }else{
                $sql = "SELECT * FROM `articlecontent`WHERE  `content` LIKE '%{$_GET['content']}%'";
                try{
                    $rows = $conn->query($sql);
                    foreach($rows as $row){
                        $var=$row['id'];
                        echo "<li><a href='../article-content.php?id=$var'>" .$row['tile']."</a> </li>";
                    }
                }catch(PDOException $e){
                    echo 'Query failed:'.$e->getMessage();
                }
            }
            ?>
        </ul>
        <hr class="hr">
        <div id="footer">
            <h3>
                ?Beginning
            </h3>
            <p>love with coffin
                 <span id="elapseClock">
                    </span>
                    <span>
                        <img src="../icon/iconfont-xin.png" height="16px">
                    </span>
            </p>
    </div>
</div>
    <script src="../js/three.min.js"></script>
    <script src="../js/projector.js"></script>
    <script src="../js/canvas-renderer.js"></script>
    <script src="../js/3d-lines-animation.js"></script>
    <script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.1.1.min.js"><\/script>')</script>
    <script src="../js/color.js"></script>
    <script src="../js/List.js"></script>
    </body>
    </html>
    <hr class="hr">
    <div id="footer">
        <h3>
            ?Beginning
        </h3>
        <p>love with coffin
                 <span id="elapseClock">
                    </span>
                    <span>
                        <img src="../icon/iconfont-xin.png" height="16px">
                    </span>
        </p>
    </div>
</div>
<script>
    function pageJump(){
        window.location.assign("../article-submit.php");
    }
</script>
<script src="../js/three.min.js"></script>
<script src="../js/projector.js"></script>
<script src="../js/canvas-renderer.js"></script>
<script src="../js/3d-lines-animation.js"></script>
<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="../js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="../js/color.js"></script>
<script src="../js/List.js"></script>
</body>
</html>