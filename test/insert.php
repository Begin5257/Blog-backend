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
//    $isset = $_POST['submit'] ;
    $user = $_POST['username'];
    $info = $_POST['info'];
    echo $user;
    echo $info;
    $query = "INSERT INTO users (id,password) VALUES ('{$user}','{$info}')";
try{
    $conn->query($query);
    }catch (PDOException $e){
    echo"Query failed: " .$e->getMessage();
}
?>