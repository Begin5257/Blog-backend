<?php
include './config.php';

$sql = "SELECT * FROM  `categorytest`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li>".$row['title']."<span style='display:none' class='getNum'>".$row['id']."</span> </li>";
    }
    echo '</ul>';
    echo '<form method="post" action="backend/deleteCategory.php" id="putIn">';
    echo '<button id="btn">点我删除</button>';
    echo '</form>';
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>