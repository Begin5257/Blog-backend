<?php
include 'config.php';

echo '<ul class="frontend">';
$sql = "SELECT * FROM  `articlecontent` LIMIT 0,6";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li><a href='article-content.php?id=$var'>".$row['tile']."</a> </li>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>