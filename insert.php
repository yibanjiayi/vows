<?php
include './public/common/config.php';

$pick = $_POST['pick'];
$send = $_POST['send'];
$info = $_POST['info'];
$time = time();

$sql = "insert into vowtab(pick,send,info,time) values ('{$pick}','{$send}','{$info}','{$time}')";
if ($conn -> exec($sql)){
    header('location:index.php?a=list');
//    echo '<script>window.location="index.php?a=list"</script>';
} else {
    echo "<script>alert('上传失败');location='index.php?a=list';</script>";
}