<?php
$pdo = new pdo('mysql:host=localhost;port=3306;dbname=africavsvirus','root','');
if(!$pdo) die('Unable to connect to the database.');
?>