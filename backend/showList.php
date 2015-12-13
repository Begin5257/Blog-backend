<?php
include './config.php';

$sql = "SELECT * FROM `articlecontent`";
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