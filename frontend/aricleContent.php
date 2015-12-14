<?php
include './config.php';

//$sql = "SELECT * FROM  'users'";
$sql = "SELECT * FROM `articlecontent`where id='{$_GET['id']}'";
if($_GET['id']==""){
    echo '<script>
    function pageJump(){
        window.location.assign("./Notfound.html");
         }
    pageJump();
    </script>';
}else{
    echo '<a href="#"></a>';
    $rows = $conn->query($sql);
    foreach($rows as $row) {
        echo "<h2>".$row["tile"]."</h2>";
        echo "<p>".$row["content"]."</p>";
    }
}
$conn = null;
?>