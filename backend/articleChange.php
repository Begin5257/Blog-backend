<?php
include './config.php';
echo '<form method="post" action="backend/insertChange.php">';
echo '<label for="title">标题:</label>';
//$sql = "SELECT * FROM  'users'";
$sql = "SELECT * FROM `articlecontent`  WHERE id='{$_GET['id']}'";
echo '<a href="#"></a>';
$rows = $conn->query($sql);
foreach($rows as $index => $row) {
    $title = $row['tile'];
    $classification = $row['id'];
    $content = $row['content'];
    echo "<input type='text' class='title-submit'  name='title' id='title' value='{$title}''>";
    echo '<br>';
    echo "<input type='hidden' name='id' value='{$_GET['id']}'";
    echo '</div>';
    echo '<div id="article-content">';
    echo '<label for="article">正文：</label>';
    echo "<textarea rows='50' cols='40' name='content' id='content' class='article-submit'>"."$content"."</textarea>";
    echo '<script type="text/javascript">';
    echo 'CKEDITOR.replace("content");';
    echo '</script>';
    echo '</div>';
    echo '<button id="btn">提交</button>';
    echo '  </form>';
}
$conn = null;
?>