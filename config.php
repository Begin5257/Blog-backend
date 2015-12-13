<?php
$dsn = 'mysql:host='.SAE_MYSQL_HOST_M.';port='.SAE_MYSQL_PORT.';dbname=app_begin5257';
$username = SAE_MYSQL_USER;
$password = SAE_MYSQL_PASS;
try{
    $conn = new PDO($dsn,$username,$password);
    $conn->query('set names utf8;');
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}

//$dsn ='SAE_MYSQL_HOST_M:SAE_MYSQL_PORT';
//$dbname = SAE_MYSQL_DB;
//$dsn = 'mysql:dbname = SAE_MYSQL_HOST_M';
//$username ='SAE_MYSQL_USER';
//$password = 'SAE_MYSQL_PASS';
?>