<?php
header("content-type:text/html;charset=utf-8");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>电话</td>
        <td>操作</td>
    </tr>
    <?php foreach($userInfo as $k=>$v){?>
    <tr>
        <td><?php echo $v['id']?></td>
        <td><?php echo $v['name']?></td>
        <td><?php echo $v['tel']?></td>
        <td>
            <a href="?r=hello/delete&id=<?= $v['id']?>">删除</a>
            <a href="?r=hello/update&id=<?= $v['id']?>">修改</a>
        </td>
    </tr>
    <?php }?>
</table>
</body>
</html>
