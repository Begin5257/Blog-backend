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

$title = $_POST['title'];
$content = $_POST['content'];
$sql = "UPDATE `articlecontent` SET tile ='{$title}'
 ,content = '{$content}'WHERE  id='{$_POST['id']}'";
$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("article-succeed.html");
         }
    pageJump();
    </script>';
$conn = null;
?>