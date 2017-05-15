<?php
header("content-type:text/html;charset=utf-8");
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="?r=hello/update" method="post">
    <table>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $userInfo['id']?>"></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" value="<?php echo $userInfo['name']?>"></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="tel" name="tel" value="<?php echo $userInfo['tel']?>"></td>
        </tr>
        <tr>
            <td>修改：</td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
</body>
</html>