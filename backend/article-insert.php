<?php
include 'config.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $classification = $_POST['frontend'];
    $query = "INSERT INTO articlecontent (tile,content,frontend) VALUES ('{$title}','{$content}','{$classification}')";
    $conn->query($query);
    echo '<script>
    function pageJump(){
        window.location.assign("../article-succeed.html");
         }
    pageJump();
    </script>';

$conn = null;
?>