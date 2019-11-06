<?php
    header("content-type:text/html;charset=utf-8");
	include 'allSql.php';
	// $imp=$_REQUEST['imp'];
	// $start=$_REQUEST['start'];
	// $size=$_REQUEST['size'];
//	$imp='李';
//	$start='0';
//	$size='4';
	
	//连接数据库

    $link=connect();
	if($link===false){
		exit('fail');
	}
	
    // $sql="select * from teacher where Tname like '%$imp%' limit $start , $size";
    $sql="select * from teacher";
	//展示列表数据，并解放结果，关闭数据库
    showList($link,$sql);
?>