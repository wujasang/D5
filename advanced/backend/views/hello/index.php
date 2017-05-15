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
<form action="?r=hello/add" method="post">
    姓名：<input type="text" name="name"></br>
    电话：<input type="tel" name="tel"></br>
    <input type="submit" value="提交">
</form>
</body>
</html>
