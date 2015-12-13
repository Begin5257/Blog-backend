<?php
include 'config.php';

$sql = "DELETE FROM `categorytest` WHERE  id='{$_POST['showNum']}' ";
$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("../Category.php");
         }
    pageJump();
    </script>';
$conn = null;
?>