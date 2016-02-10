<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Beginning</title>
    <link rel="stylesheet" type="text/css" href="css/article-list.css" media="screen"/>
</head>
<body>
<?include 'parts/header.php'?>
<div id="container">
    <div id="login">
        <form action="login.php" method="post">
            用户名：<input type="text"  class="login-text" placeholder="请输入用户名" id="id" name="id">
            <br>
            密码：<input type="password" class="login-text1" placeholder="请输入密码" id="password" name="password">
            <br>
            <input  type="submit" id="btn" value="登录">
        </form>
    </div>
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
<script>
    function pageJump(){
        window.location.assign("backPage.html");
    }
</script>
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