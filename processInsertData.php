
/**
 * Created by PhpStorm.
 * User: 83916
 * Date: 2015/11/28
 * Time: 15:27
 */
<?php
    $link=mysql_connect("localhost","root","0");
    mysql_select_db("myapp");
    $id=$_POST['txtId']|null;
    $name=$_POST['txtName'];
    $age=$_POST['txtAge'];
    $sex=$_POST['sSex'];
    $address=$_POST['txtAddress'];

    $exec="insert into article-test values('$id','$name')";
    $result=mysql_query($exec);
    if($result) echo "学生已添加到数据表中<br>";
    else echo "该学生没有添加进数据表，请重新输入。<br>";
    mysql_close();
?>
<a href="insertData.php">返回添加页面</a>
