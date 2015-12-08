<?php
$dsn = 'mysql:dbname=myapp';
$username = 'root';
$password = '';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}

$sql = "DELETE FROM `articleformal` WHERE  id='{$_POST['showNum']}' ";
$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("article-delete.php");
         }
    pageJump();
    </script>';
$conn = null;
?>