<?php
	header("content-type:text/html;charset=utf-8");
	include 'allSql.php';
	$username=$_REQUEST['username'];
//	$username='李';
	$link =connect();
	
	$sql="select count(*) from teacher where Tname like '%$username%'";
	
	countNum($link,$sql);
?>