<html>
<head>
    <title>向数据库中插入数据</title>
</head>
<body>
<center>
    <form name="myForm" method="post" action="processInsertData.php">
        <table bgcolor="cyan">
            <tr>
                <td>学号</td>
                <td><input type="text" name="txtId"  /></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="txtName" /></td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="txtAge"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <select name="sSex">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>地址</td>
                <td><input type="text" name="txtAddress"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="添加"/>
                    <input type="reset" name="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>