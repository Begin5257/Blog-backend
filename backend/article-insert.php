<?php
include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}

    $title = $_POST['title'];
    $content = $_POST['content'];
    $classification = $_POST['frontend'];
    $query = "INSERT INTO articlecontent (tile,content,frontend) VALUES ('{$title}','{$content}','{$classification}')";
    $conn->query($query);
    echo '<script>
    function pageJump(){
        window.location.assign("../article-succeed.html");
         }
    pageJump();
    </script>';

$conn = null;
?>