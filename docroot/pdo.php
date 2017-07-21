<?php

$dbname = 'space';
$username = 'admin';
$password = '38q8jd9f';
$hosts = 'mysql';

$db = new PDO('mysql:host=' . $hosts . ';port=3306;dbname=' . $dbname, $username, $password);
$db->exec('SET NAMES "utf8";');

$query = $db->prepare("SELECT * FROM `satellites` LIMIT 10;");
$query->execute(array());
$money = $query->fetch(PDO::FETCH_ASSOC);

var_dump($money);
