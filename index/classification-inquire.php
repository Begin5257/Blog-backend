<?php
include 'config.php';

$sql = "SELECT * FROM  `categorytest`";
echo '<ul class="frontend">';
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li><a href='article-classification.php?id=$var'>".$row['title']."</a> </li>";
    }
    echo ' </ul>';
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>