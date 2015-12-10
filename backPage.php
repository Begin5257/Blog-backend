<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/article-content.css">
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
    <div id="manage">
        <ul>
            <li id="add">文章添加</li>
            <li id="delete">文章删除</li>
            <li id="category">分类管理</li>
        </ul>
    </div>
    <div id="content">

    </div>
</div>
<script>
    function createXML(){
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp =new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp =new ActiveXObject("Microsoft.XMLHTTP");
        } xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("content").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","http://localhost:63343/blog/select-list.php",true);
        xmlhttp.send();
    }
    var add=document.getElementById("add");
    add.onclick=function(){
            createXML();
    };
    var category = document.getElementById("category");
    category.onclick = function () {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp =new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp =new ActiveXObject("Microsoft.XMLHTTP");
        } xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("content").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","http://localhost:63343/blog/category.php",true);
        xmlhttp.send();
    }
</script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/projector.js"></script>
<script src="js/canvas-renderer.js"></script>
<script src="js/3d-lines-animation.js"></script>
<script src="js/color.js"></script>
<script src="js/List.js"></script>
</body>
</html>