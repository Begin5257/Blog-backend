<?php
include 'config.php';
$loginID = $_POST['id'];
$loginPassword = $_POST['password'];

$sql = "SELECT * FROM  `users`WHERE  id='Beginning'";
$rows = $conn->query($sql);
foreach($rows as $row){
    if($loginPassword==$row['password']){
        echo '<script>
             function pageJump(){
        window.location.assign("../backPage.html");
            }
            pageJump();
            </script>';
    }else{
        echo '<script>alert("登录失败，请检查用户名和密码");</script>';
        echo '<script>
    function pageJump(){
        window.location.assign("../admin.php");
         }
    pageJump();
    </script>';
    }
}
$conn = null;
?>