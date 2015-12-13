<?php
include '../config.php';

$title = $_POST['title'];
$content = $_POST['content'];
$sql = "UPDATE `articlecontent` SET tile ='{$title}'
,content = '{$content}'WHERE  id='{$_POST['id']}'";

$conn->query($sql);
echo '<script>
    function pageJump(){
        window.location.assign("../article-succeed.html");
         }
    pageJump();
    </script>';
$conn = null;
?>