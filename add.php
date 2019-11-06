<?php
    header("content-type:text/html;charset=utf-8");
    include 'allSql.php';
	$no=$_REQUEST['no'];
    $name=$_REQUEST['name'];
    $sex=$_REQUEST['sex'];
    $bir=$_REQUEST['bir'];
    $prof=$_REQUEST['prof'];
    $dep=$_REQUEST['dep'];

    $link=connect();
	
    $sql="insert into teacher (Tno,Tname,Tsex,Tbirthday,Prof,Depart) value('$no','$name','$sex','$bir','$prof','$dep')";
	insert($link,$sql);
?>