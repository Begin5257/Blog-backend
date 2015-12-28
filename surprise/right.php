<?php

include "../config.php";

$sql ="SELECT * FROM `surprise` WHERE id%2=0";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        echo '<div class="placeholder"></div>';
        $var=$row['id'];
        echo "<div class='demo'><p class='rightContent'>".$row['content']."</p></div>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>