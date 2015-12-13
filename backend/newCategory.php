<?php
include 'config.php';
$title = $_POST['newCategory'];

$query = "INSERT INTO `categorytest` (title)VALUES ('{$title}')";

$conn->query($query);
echo '<script>
    function pageJump(){
        window.location.assign("../Category.php");
         }
    pageJump();
    </script>';
$conn = null;
?>