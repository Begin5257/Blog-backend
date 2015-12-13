<?php
include 'config.php';

//$sql = "SELECT * FROM  'users'";
echo "<table>
        <thead>
        <tr>
        <th>主题</th>
        <th>分类</th>
        <th>日期</th>
        </tr>
        </thead>
        <tbody>";
$sql = "SELECT * FROM  `articlecontent`";
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        echo "<tr>";
        echo "<td>".$row['tile']."</td>";
        echo "<td>".$row['frontend']."</td>";
        echo "<td>".$row['DataType']."</td>";
        echo "</tr>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
echo "</tbody>";
echo "</table>";
$conn = null;
?>



