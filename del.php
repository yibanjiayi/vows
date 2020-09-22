<?php
include 'public/common/config.php';

$id = $_GET['id'];
$pageNum = $_GET['pageNum'];

$sql = "delete from vowtab where id={$id}";
$conn->exec($sql);
header("location:index.php?a=list&pageNum={$pageNum}");