<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/article-list.css" media="screen"/>
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
                    <img src="icon/QQ图片20151123171438.jpg">
                </a>
            </li>
            <li class="nav-li"><a href="#footer">关于我</a> </li>
            <li class="nav-li"><a href="article-category.php">分类</a> </li>
            <li class="nav-li"><a href="article-list.php">文章</a> </li>
            <li class="nav-li"><a href="index.php">首页</a> </li>
        </ul>
        <div id="sidebar">
            <img src="icon/iconfont-liebiao%20(2).svg" height="30px">
        </div>
        <div id="sidebar-detail" >
            <ul>
                <li><a href="index.php">首页</a></li>
                <li><a href="article-list.php"> 文章列表</a></li>
                <li><a href="article-category.php"> 文章分类</a></li>
                <li><a href="#footer">关于我</a></li>
            </ul>
        </div>
        <img src="icon/shadow-separator-wide-bottom.png" width="100%" height="5px">
    </div>
</div>
<div id="container">
        <form>
            <div id='list'>
                <table>
                    <thead>
                    <tr>
                        <th>主题</th>
                        <th>分类</th>
                        <th>日期</th>
                    </tr>
                    </thead>
                    <?php
                    $pagesize = 15;
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
                    //多表查询~
                    $sql = "SELECT articlecontent.id, articlecontent.tile, DataType, content, categorytest.title
                    as categorytitle, categorytest.id as categoryid FROM categorytest, articlecontent where
                    categorytest.id = articlecontent.classification LIMIT $start,$end";
                        try{
                            $rows = $conn->query($sql);
                            foreach($rows as $row){
                                $var=$row['id'];
                                echo "<tr>";
                                echo "<td><a href='article-content.php?id=$var'>".$row['tile']."</a> </td>";
                                echo "<td><a href='#'>".$row['categorytitle']."</a> </td>";
                                echo "<td><a href='#'> ".$row['DataType']."</a></td>";
                                echo "</tr>";
                            }
                        }catch(PDOException $e){
                            echo 'Query failed:'.$e->getMessage();
                        }
                    echo '</tbody>';
                    echo '</table>';
                    echo '</table>';
                    echo '</div>';
                    echo '<hr class="hr">';
                    $rows = $conn->query($sql);
                    $row = PDO::FETCH_ASSOC;
                    $total_rows = $var;
                    $total_page = ceil($total_rows/$pagesize);
                    echo '<div id=pageList>';
                    echo '<a href="article-list.php">首页</a>';
                    if($page > 1) {
                        echo '<a href="article-list.php?page=' . ($page - 1) . '">上一页</a>';
                    }

                    if($page < $total_page) {
                        echo '<a href="article-list.php?page=' . ($page + 1) . '">下一页</a>';
                    }
                    echo '<a href="article-list.php?page='.$total_page.'">尾页</a>';
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
<script src="js/three.min.js"></script>
<script src="js/projector.js"></script>
<script src="js/canvas-renderer.js"></script>
<script src="js/3d-lines-animation.js"></script>
<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="js/color.js"></script>
<script src="js/List.js"></script>
</body>
</html>