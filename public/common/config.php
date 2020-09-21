<?php


$conn = new PDO("mysql:host=localhost;dbname=vowdb",'root','2020work.') or die("连接失败");
$conn -> exec("set names utf8");