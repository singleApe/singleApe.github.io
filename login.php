<?php
$user = $_POST["user"];
$password = $_POST["pwd"];
$sql="insert into user(username,password) values('$user','$password')";
mysql_connect('localhost','root', '');
mysql_select_db('dd');
$res=mysql_query($sql);
?>