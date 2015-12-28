<?php

include "../config.php";

$sql ="SELECT * FROM `surprise` WHERE id%2=1";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<div class='demo'><p class='leftContent'>".$row['content']."</p></div>
        <div class='date'>".$row['DataType']."</div>";
        echo '<div class="placeholder"></div>';
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>