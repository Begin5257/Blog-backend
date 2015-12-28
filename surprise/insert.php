<?php
include '../config.php';

$content = $_POST['content'];
$query = "INSERT INTO surprise (content) VALUES ('{$content}')";
$conn->query($query);
echo '<script>
    function pageJump(){
        window.location.assign("index.php");
         }
    pageJump();
    </script>';

$conn = null;
?>