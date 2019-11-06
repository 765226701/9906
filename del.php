<?php
	header("content-type:text/html;charset=utf-8");
	include 'allSql.php';
	$delNo=$_REQUEST['delNo'];
	
	$link=connect();
	
	$sql="delete from teacher where Tno='$delNo'";
	
	$res=mysqli_query($link,$sql);
	if($res===false){
		echo "fail";
		exit;
	}
	
	$row=mysqli_affected_rows($link);
	if($row>0){
		echo 'success';
	}else{
		echo 'fail';
	}
	
	mysqli_close($link);
?>