<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/article-content.css" media="screen/">
</head>
<body>
<div id="canvas-background">
    <div id="canvas" class="gradient"></div>
</div>
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
    <div id="sidebar-detail">
        <ul>
            <li><a href="index.php">首页</a></li>
            <li><a href="article-list.php"> 文章列表</a></li>
            <li><a href="article-category.php"> 文章分类</a></li>
            <li><a href="#footer">关于我</a></li>
        </ul>
    </div>
    <img src="icon/shadow-separator-wide-bottom.png" width="100%" height="5px">
</div>
<div id="container">
    <div class="article">
        <?php include'frontend/aricleContent.php';?>
        <div id="comment">
            <h3>发表评论</h3>
            <input type="textarea" id="comment-body">
            <button id="btn">评论</button>
        </div>
        <div class="comment-list">
            <div class="comment-content">
                <div class="header"><img src="head-portrait/7646acd250c2118efa410081c3f771f4_b.jpg" height="50px"> </div>
                <div class="content">
                    <div class="name">
                        <p>Beginning</p>
                    </div>
                    <div class="details">
                        <p>Just a test.</p>
                    </div>
                    <div class="comment-date">
                        2015-11-25
                    </div>
                    <div class="comment-icon">
                        <ul>
                            <li><img src="icon/iconfont-dianzan.png" height="15px"></li>
                            <li>喜欢</li>
                            <li><img class="icons" src="icon/iconfont-huifu.png" height="15px"></li>
                            <li>回复</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comment-content">
                <div class="header"><img src="head-portrait/2702b00ec4844f981b3c33a7ac7fa6d5_r.jpg" height="50px"> </div>
                <div class="content">
                    <div class="name">
                        <p>Beginning</p>
                    </div>
                    <div class="details">
                        <p>Just a test.</p>
                    </div>
                    <div class="comment-date">
                        2015-11-25
                    </div>
                    <div class="comment-icon">
                        <ul>
                            <li><img src="icon/iconfont-dianzan.png" height="15px"></li>
                            <li>喜欢</li>
                            <li><img class="icons" src="icon/iconfont-huifu.png" height="15px"></li>
                            <li>回复</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comment-content">
                <div class="header"><img src="head-portrait/8033b11c712b4aebbf25ecf936a19657_b.jpg" height="50px"> </div>
                <div class="content">
                    <div class="name">
                        <p>Beginning</p>
                    </div>
                    <div class="details">
                        <p>Just a test.</p>
                    </div>
                    <div class="comment-date">
                        2015-11-25
                    </div>
                    <div class="comment-icon">
                        <ul>
                            <li><img src="icon/iconfont-dianzan.png" height="15px"></li>
                            <li>喜欢</li>
                            <li><img class="icons" src="icon/iconfont-huifu.png" height="15px"></li>
                            <li>回复</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comment-content">
                <div class="header"><img src="head-portrait/82457ba40559e5f5fc0f2874e451d97f_b.png" height="50px"> </div>
                <div class="content">
                    <div class="name">
                        <p>Beginning</p>
                    </div>
                    <div class="details">
                        <p>Just a test.</p>
                    </div>
                    <div class="comment-date">
                        2015-11-25
                    </div>
                    <div class="comment-icon">
                        <ul>
                            <li><img src="icon/iconfont-dianzan.png" height="15px"></li>
                            <li>喜欢</li>
                            <li><img class="icons" src="icon/iconfont-huifu.png" height="15px"></li>
                            <li>回复</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comment-content">
                <div class="header"><img src="head-portrait/7f8cc6cda3be23d0bb6f1577f93187c5_b.jpg" height="40px"> </div>
                <div class="content">
                    <div class="name">
                        <p>Beginning</p>
                    </div>
                    <div class="details">
                        <p>Just a test.</p>
                    </div>
                    <div class="comment-date">
                        2015-11-25
                    </div>
                    <div class="comment-icon">
                        <ul>
                            <li><img src="icon/iconfont-dianzan.png" height="15px"></li>
                            <li>喜欢</li>
                            <li><img class="icons" src="icon/iconfont-huifu.png" height="15px"></li>
                            <li>回复</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
            <div id="return">
                <a href="#">返回顶部</a>
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
                <button id="inquireSearch"><img src="icon/iconfont-tubiao.svg" height="25px"></button>
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
</div>
<script src="js/calender.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/projector.js"></script>
<script src="js/canvas-renderer.js"></script>
<script src="js/3d-lines-animation.js"></script>
<script src="js/color.js"></script>
<script src="js/List.js"></script>
</body>
</html>