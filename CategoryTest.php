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
<div id="container">
    <div id="category">
        <div id="existing">
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
                }$sql = "SELECT * FROM  `categorytest`";
                try{
                    $rows = $conn->query($sql);
                    foreach($rows as $row){
                        $var=$row['id'];
                        echo "<li>".$row['title']."<span style='display:none' class='getNum'>".$row['id']."</span> </li>";
                    }
                    echo '</ul>';
                    echo '<form method="post" action="deleteCategory.php" id="putIn">';
                    echo '<button id="btn">点我删除</button>';
                    echo '</form>';
                }catch(PDOException $e){
                    echo 'Query failed:'.$e->getMessage();
                }
                ?>
        </div>
        <div id="new">
            <form method="post" action="newCategory.php">
                <input type="text" name="newCategory">
                <button id="btn">提交</button>
            </form>
        </div>
        <a href="backPage.html">回到后台~</a>
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
        window.location.assign("article-submit.html");
    }
</script>
<script src="js/liStatus.js"></script>
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