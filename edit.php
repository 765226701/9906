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
	
    $sql="update teacher set Tname='$name',Tsex='$sex',Tbirthday='$bir',Prof='$prof',Depart='$dep' where Tno='$no'";
    
	update($link,$sql);
?>