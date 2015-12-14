<!doctype html>
<!--<html>
<head></head>
<body></body>
</html>-->
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
            <li class="nav-li"><a href="article-category.php">分类</a> </li>
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
                <li><a href="article-category.php"> 文章分类</a></li>
                <li><a href="#footer">关于我</a></li>
            </ul>
        </div>
        <img src="icon/shadow-separator-wide-bottom.png" width="100%" height="5px">
    </div>
</div>
<div id="container">
    <div id="block">
       <?php include'index/container-inquire.php'?>
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
    </div>
    <div id="tools">
        <div class="day">
            <div class="DaySelect">
                <i class="lr" onclick="Month('l')"></i>
                <div class="select">
                    <div class="stop" id="cy">2015</div>
                    <div class="sbox">
                        <ul id="YearAll">
                            <li>2013</li>
                        </ul>
                    </div>
                </div>
                <div class="select" id="sm">
                    <div class="stop" id="cm">12</div>
                    <div class="sbox" id="mm">
                        <ul id="DateAll">
                            <li>01</li>
                        </ul>
                    </div>
                </div>
                <i class="lr" onclick="Month('r')"></i>
                <i onclick="now()"></i>
            </div>
            <div id="DayAll"></div>
        </div>
        <div id="article_inquire">
            <form action="index/index-inquire.php" method="get">
                <input type="text" name="content" class="wenben">
                <span> <button id="inquireSearch"><img src="icon/iconfont-tubiao.svg" height="25px"></button></span>
            </form>
        </div>
        <div id="article_list">
            <form>
                <ul class="classification">
                  <?php include'index/list-inquire.php';?>
                    <li class="special"><a href="article-list.php">更多>></a></li>
                </ul>
            </form>
        </div>
        <div id="article_classification">
            <form>
                <ul class="classification">
                   <?php include'index/classification-inquire.php';?>
                </ul>
            </form>
        </div>
    </div>
<script src="js/calender.js"></script>
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
<!--<html>
<head></head>
<body></body>
</html>-->
</html>