<?php
$pagesize = 15;
$page = isset($_GET['page'])?$_GET['page']:1;

include 'config.php';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}
$start =  ($page-1)*$pagesize;
$end = $page*$pagesize;
//多表查询~
$sql = "SELECT articlecontent.id, articlecontent.tile, DataType, content, categorytest.title
                    as categorytitle, categorytest.id as categoryid FROM categorytest, articlecontent where
                    categorytest.id = articlecontent.classification LIMIT $start,$end";
try{
    $rows = $conn->query($sql);
    $i = 1;
    foreach($rows as $row){
        $var=$row['id'];
        $i =$i+1;
        echo "<tr>";
        echo "<td><a href='article-content.php?id=$var'>".$row['tile']."</a> </td>";
        echo "<td><a href='#'>".$row['categorytitle']."</a> </td>";
        echo "<td><a href='#'> ".$row['DataType']."</a></td>";
        echo "</tr>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
echo '</tbody>';
echo '</table>';
echo '</table>';
echo '</div>';
echo '<hr class="hr">';
$rows = $conn->query($sql);
$row = PDO::FETCH_ASSOC;
$total_rows = $i;
$total_page = ceil($total_rows/$pagesize);
echo '<div id=pageList>';
echo '<a href="article-list.php">首页</a>';
if($page > 1) {
    echo '<a href="article-list.php?page=' . ($page - 1) . '">上一页</a>';
}

if($page < $total_page) {
    echo '<a href="article-list.php?page=' . ($page + 1) . '">下一页</a>';
}
echo '<a href="article-list.php?page='.$total_page.'">尾页</a>';
echo '</div>';
?>