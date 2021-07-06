<?php

/**
 * 开原地址:https://github.com/aedelnz/MarkorEcho
 * @package JIXIEJIDIGUAN
 * @author 创极阁
 * @version 1.0
 * @link http://jixiejidiguan.top
 */
 
include 'common.php';
foreach (glob('post/*.md') as $file) {
    $v = file2info($file);
    $data[$v['id']] = ['title' => $v['title'], 'date' => $v['date']];
}
krsort($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MarkorEcho - 个人博客</title>
    <link href="rsc/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="container">
    <div id="sidebar">
        <div id="logo">MarkorEcho - 个人博客</div>
        <div id="aboutus">
            blog: 地址
            </br></br>
            email: 邮箱
        </div>
    </div>
    <div id="main">
        <div id="list">
            <ul>
                <?php
                foreach ($data as $id => $v) {
                    $tpl = '<li><a href="post.php?id=%d">%s<span class="date">[ %s ]</span></a></li>';
                    echo sprintf($tpl, $id, $v['title'], $v['date']);
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
