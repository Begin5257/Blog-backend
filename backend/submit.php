<?php
include 'config.php';

$sql = "SELECT * FROM  `categorytest`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<option value='$var' class='category'>".$row['title']."</option>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>