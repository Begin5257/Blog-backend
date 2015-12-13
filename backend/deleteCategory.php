<?php
include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}

$sql = "DELETE FROM `categorytest` WHERE  id='{$_POST['showNum']}' ";
$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("../Category.php");
         }
    pageJump();
    </script>';
$conn = null;
?>