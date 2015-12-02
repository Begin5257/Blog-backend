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
//$sql = "SELECT * FROM  'users'";
$sql = "SELECT * FROM `users`";
    echo "<ul>";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        echo "<li>".$row["id"] . "</li>"."<li>".$row["password"]."</li>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
    echo "</ul>";
$conn = null;
?>



