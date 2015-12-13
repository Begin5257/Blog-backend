<?php
include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}
$title = $_POST['newCategory'];

$query = "INSERT INTO `categorytest` (title)VALUES ('{$title}')";

$conn->query($query);
echo '<script>
    function pageJump(){
        window.location.assign("../Category.php");
         }
    pageJump();
    </script>';
$conn = null;
?>