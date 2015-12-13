<?php
include './config.php';

$sql = "SELECT * FROM `articlecontent`where classification='{$_GET['id']}'";
$rows = $conn->query($sql);
foreach($rows as $row) {
    $var=$row['id'];
    echo "<li><a href='/article-content.php?id=$var'>".$row['tile']."</a> </li>";
}
$conn = null;
?>