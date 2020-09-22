<?php


$conn = new PDO("mysql:host=localhost;dbname=vowdb",'root','root') or die("连接失败");
$conn -> exec("set names utf8");