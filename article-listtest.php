<?php
//1，将数据库的所有记录查询出来，然后再一页一页的显示
$dsn = 'mysql:dbname=myapp';
$username = 'root';
$password = '';
try{
    $conn = new PDO($dsn,$username,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connection failed:'.$e->getMessage();
}
//首先要=知道每页显示几条记录 pagesize
//第几页 page
//下一页要掠过之前的几个记录 offset
/*
0 0 0 0 0 0 0 0 0
page offset pagesize
1 0 2
2 2 2
3 4 2
4 6 2
*/
//我们还是通过传递page参数的形式来判断当前是第几页
//?page = 1 第一页 ?page=2 第二页 page=3 第三也
$pagesize = 15;
$page = isset($_GET['page'])?$_GET['page']:2;
//通过page 和 pagesize 求出offset
$offset = $pagesize * ($page-1);
$sql = "SELECT * FROM  `articleformal`";
//$var=6;
try{
    $rows = $conn->query($sql);
    foreach($rows as $row){
        $var=$row['id'];
        echo "<tr>";
        echo "<td><a href='article-content.php?id=$var'>".$row['title']."</a> </td>";
        echo "<td><a href='#'>".$row['classification']."</a> </td>";
        echo "<td><a href='#'> ".$row['DataType']."</a></td>";
        echo "</tr>";
    }
}catch(PDOException $e){
    echo 'Query failed:'.$e->getMessage();
}
//总的记录数
$row = PDO::FETCH_ASSOC;
$total_rows = $row['total'];
$total_page = ceil($total_rows/$pagesize);
echo '<a href="article-list.php">首页</a>';
//第一页的时候没有上一页

//尾页的时候不显示下一页
if($page < $total_page){
    echo '<a href="a href="article-list.php?page='.($page+1).'">下一页</a>';
    echo '&nbsp;';
}
echo '<a href="a href="article-list.php?page='.$total_page.'">尾页</a>';
?>