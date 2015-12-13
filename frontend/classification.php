<?php
$dsn = 'mysql:dbname=myapp';
$username = 'root';
$password = '';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}

$sql = "SELECT * FROM `articlecontent`where classification='{$_GET['id']}'";
$rows = $conn->query($sql);
foreach($rows as $row) {
    $var=$row['id'];
    echo "<li><a href='/article-content.php?id=$var'>".$row['tile']."</a> </li>";
}
$conn = null;
?>