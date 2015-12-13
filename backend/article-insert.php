<?php
include '../config.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $classification = $_POST['category'];
    $query = "INSERT INTO articlecontent (tile,content,classification) VALUES ('{$title}','{$content}','{$classification}')";
    $conn->query($query);
    echo '<script>
    function pageJump(){
        window.location.assign("../article-succeed.html");
         }
    pageJump();
    </script>';

$conn = null;
?>