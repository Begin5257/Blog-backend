<?php
$dsn = 'mysql:host='.SAE_MYSQL_HOST_M.';port='.SAE_MYSQL_PORT.';dbname=app_begin5257';
$username = SAE_MYSQL_USER;
$password = SAE_MYSQL_PASS;

//$dsn = 'mysql:host=localhost;dbname=myapp';
//$username ='root';
//$password = '';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn->query('set names utf8;');
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}
?>