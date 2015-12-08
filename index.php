<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen"/>
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="nav-background">
    <div class="canvas-content">
        <h2>
            Beginning
        </h2>
        <p>
            You are the light of my life.
        </p>
    </div>
    <div id="canvas" class="gradient"></div>
    <div class="nav fix">
        <ul class="nav-ul">
            <li class="nav-left">
                <a href="admin.php">
                    <img src="icon/QQ图片20151123171438.jpg">
                </a>
            </li>
            <li class="nav-li"><a href="#footer">关于我</a> </li>
            <li class="nav-li"><a href="article-classification.html">分类</a> </li>
            <li class="nav-li"><a href="article-list.php">文章</a> </li>
            <li class="nav-li"><a href="#">首页</a> </li>
        </ul>
        <div id="sidebar">
            <img src="icon/iconfont-liebiao%20(2).svg" height="30px">
        </div>
        <div id="sidebar-detail">
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="article-list.php"> 文章列表</a></li>
                <li><a href="article-classification.html"> 文章分类</a></li>
                <li><a href="#footer">关于我</a></li>
            </ul>
        </div>
        <img src="icon/shadow-separator-wide-bottom.png" width="100%" height="5px">
    </div>
</div>
<div id="container">
    <div id="block">
        <?php
        $pagesize = 10;
        $page = isset($_GET['page'])?$_GET['page']:1;

        $dsn = 'mysql:dbname=myapp';
        $username = 'root';
        $password = '';
        try{
            $conn = new PDO($dsn,$username,$password);
            $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Connection failed:'.$e->getMessage();
        }
        $start =  ($page-1)*$pagesize;
        $end = $page*$pagesize;
        $sql = "SELECT * FROM  `articlecontent` LIMIT $start,$end";
        try{
            $rows = $conn->query($sql);
            foreach($rows as $row){
                echo '<div class="article">';
                echo '<div id="article-h2" >';
                $var=$row['id'];
                echo "<a href='article-content.php?id=$var'><h2>".$row['tile']."</h2></a>";
                echo "</div>";
                echo '<p class="article_comment">发表于'.$row["DataType"].'|<span><a href="#">暂无评论</a> </span></p>';
                echo '<p class="article_body">'.$row['content']."</p>";
                echo '<hr class="hr">';
                echo '</div>';
            }
        }catch(PDOException $e){
            echo 'Query failed:'.$e->getMessage();
        }

        $rows = $conn->query($sql);
        $row = PDO::FETCH_ASSOC;
        $total_rows = $var;
        $total_page = ceil($total_rows/$pagesize);
        echo '<div id=pageList>';
        echo '<a href="index.php">首页</a>';
        if($page > 1) {
            echo '<a href="index.php?page='. ($page - 1) . '">上一页</a>';
        }
        if($page < $total_page) {
            echo '<a href="index.php?page=' . ($page + 1) . '">下一页</a>';
        }
        echo '<a href="index.php?page='.$total_page.'">尾页</a>';
        echo '</div>';
        ?>
        <hr class="hr">
        <div id="footer">
            <h3>
                ©Beginning
            </h3>
            <p>love with coffin
                    <span id="elapseClock">

                    </span>
                    <span>
                        <img src="icon/iconfont-xin.png" height="16px">
                    </span>
            </p>
        </div>
    </div>
    <div id="tools">
        <div id="date">
            <p></p>
        </div>
        <div id="article_inquire">
            <form action="index-inquire.php" method="get">
                <input type="text" name="content">
                <button><img src="icon/iconfont-tubiao.svg" height="25px"></button>
            </form>
        </div>
        <div id="article_list">
            <form>
                <ul class="classification">
                <?php
                $dsn = 'mysql:dbname=myapp';
                $username = 'root';
                $password = '';
                try{
                    $conn = new PDO($dsn,$username,$password);
                    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo 'Connection failed:'.$e->getMessage();
                }$sql = "SELECT * FROM  `articlecontent` LIMIT 0,6";
                try{
                    $rows = $conn->query($sql);
                    foreach($rows as $row){
                        $var=$row['id'];
                        echo "<li><a href='article-content.php?id=$var'>".$row['tile']."</a> </li>";
                    }
                }catch(PDOException $e){
                    echo 'Query failed:'.$e->getMessage();
                }
                ?>
                    <li class="special"><a href="article-list.php">更多>></a></li>
                </ul>
            </form>
        </div>
        <div id="article_classification">
            <form>
                <ul class="classification">
                    <?php
                    $dsn = 'mysql:dbname=myapp';
                    $username = 'root';
                    $password = '';
                    try{
                        $conn = new PDO($dsn,$username,$password);
                        $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    }catch(PDOException $e){
                        echo 'Connection failed:'.$e->getMessage();
                    }$sql = "SELECT * FROM  `categorytest` LIMIT 0,6";
                    try{
                        $rows = $conn->query($sql);
                        foreach($rows as $row){
                            $var=$row['id'];
                            echo "<li><a href='#'>".$row['title']."</a> </li>";
                        }
                    }catch(PDOException $e){
                        echo 'Query failed:'.$e->getMessage();
                    }
                    ?>
                </ul>
            </form>
        </div>
    </div>
</div>
<script src="js/three.min.js"></script>
<script src="js/projector.js"></script>
<script src="js/canvas-renderer.js"></script>
<script src="js/3d-lines-animation.js"></script>
<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="js/color.js"></script>
<script src="js/nav.js"></script>
<script src="js/scrollfix.js"></script>
</body>
</html>