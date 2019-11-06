<?php
	header("content-type:text/html;charset=utf-8");
    include 'allSql.php';
	
    $no=$_REQUEST['str'];
    $link=connect();
    $sql="select * from teacher where Tno='$no'";
	
	edit($link,$sql);
	?>
