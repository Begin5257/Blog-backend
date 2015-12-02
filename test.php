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
$sql = "SELECT * FROM `articleformal`";
echo "<ul>";
    $rows = $conn->query($sql);
    foreach($rows as $row) {
        echo "<li>" . $row["title"] . "</li>";
        echo "<li>" . $row["classification"] . "</li>";
        echo "<li>" . $row["DataType"] . "</li>";
    }
echo "</ul>";
$conn = null;
?>



