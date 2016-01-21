<?php
$pagesize = 5;
$page = isset($_GET['page'])?$_GET['page']:1;

include 'config.php';

$start =  ($page-1)*$pagesize;
$end = $page*$pagesize;
$sql = "SELECT * FROM  `articlecontent`  ORDER BY id DESC LIMIT $start,$end ";
try{
    $rows = $conn->query($sql);
    $i=1;
    foreach($rows as $row){
        echo '<div class="article">';
        echo '<div id="article-h2" >';
        $var=$row['id'];
        $i=$i+1;
        echo "<a href='article-content.php?id=$var'><h2>".$row['tile']."</h2></a>";
        echo "</div>";
        echo '<p class="article_comment">发表于'.$row["DataType"].'|<span><a href="#">暂无评论</a> </span></p>';
        echo '<p class="article_body">'.$row['content']."</p>";
        echo '<hr class="hr">';
        echo '</div>';
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
$rows = $conn->query($sql);
$row = PDO::FETCH_ASSOC;
$total_rows = $i;
$total_page = ceil($total_rows/$pagesize);
echo '<div id= pageList>';
echo '<a href="index.php">首页</a>';
if($total_page==1){

}
if($page > 1) {
    echo '<a href="index.php?page='. ($page - 1) . '">上一页</a>';
}
if($page < $total_page) {
    echo '<a href="index.php?page=' . ($page + 1) . '">下一页</a>';
}
echo '<a href="index.php?page='.$total_page.'">尾页</a>';
?>