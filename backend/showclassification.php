<?php
include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}$sql = "SELECT * FROM  `categorytest`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<li>".$row['title']."<span style='display:none' class='getNum'>".$row['id']."</span> </li>";
    }
    echo '</ul>';
    echo '<form method="post" action="deleteCategory.php" id="putIn">';
    echo '<button id="btn">点我删除</button>';
    echo '</form>';
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>