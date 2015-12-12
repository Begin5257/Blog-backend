<?php
$dsn = 'mysql:dbname=myapp';
$username = 'root';
$password = '';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}echo '<ul class="classification">';
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