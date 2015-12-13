<?php
include 'config.php';

$sql = "DELETE FROM `articlecontent` WHERE  id='{$_POST['showNum']}' ";
$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("../article-delete.php");
         }
    pageJump();
    </script>';
$conn = null;
?>