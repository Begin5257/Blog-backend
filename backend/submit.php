<?php
$dsn = 'mysql:dbname=myapp';
$username = 'root';
$password = '';
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
        echo "<option value='$var' class='category'>".$row['title']."</option>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
?>