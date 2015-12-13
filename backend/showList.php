<?php
include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}$sql = "SELECT * FROM `articlecontent`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li><a href='article-change.php?id=$var'>".$row['tile']."</a> </li>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>