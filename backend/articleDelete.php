<?php
include 'config.php';
$sql = "SELECT * FROM `articlecontent`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li>".$row['tile']."<span style='display:none' class='getNum'>".$row['id']."</span> </li>";
    }
    echo "</ul>";
    echo '<form method="post" action="deleteArticle.php" id="putIn">';
    echo '<button id="btn">点我删除</button>';
    echo '</form>';
    echo '</div>';
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>