<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <<title>Beginning</title>
    <link rel="stylesheet" type="text/css" href="css/article-list.css" media="screen"/>
    <script src="http://cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>
<body>
<?include 'parts/header.php'?>
<div id="container">
    <form method="post" action="backend/article-insert.php">
    <div id="article-title">
            <label for="title">标题:</label>
            <input type="text" class="title-submit" placeholder=" 这里是标题" name="title" id="title">
            <br>
            <label for="classfication">分类:</label>
                <select class="title-submit" id="classification" name="category">
                    <?php include'backend/submit.php';?>
                </select>
        <script>
            document.getElementById("classification").onchange=function(){
                var val= document.getElementById("classification").value;
                            var newLable = document.createElement("input");
                            newLable.setAttribute("type","hidden");
                            newLable.setAttribute("name","classification");
                            newLable.setAttribute("value",val);

                            var element = document.getElementById("article-title");
                            element.appendChild(newLable);
            };
        </script>
    </div>
    <div id="article-content">
        <label for="article">正文：</label>
        <textarea name="content" id="content" class="article-submit"></textarea>
        <script type="text/javascript">
            CKEDITOR.replace('content');
        </script>
    </div>
        <button id="btn">提交</button>
    </form>
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