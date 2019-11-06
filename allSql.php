<?php

	//连接数据库,编码
	function connect($host='127.0.0.1',$use='root',$pwd='root',$dbName='demo'){
		$link=mysqli_connect($host,$use,$pwd,$dbName);
		if($link===false){
			return false;
		}
		mysqli_set_charset($link,'utf8');
		return $link;
	}
	
	//根据搜索内容展示列表(或默认展示)
	function showList($link,$sql){
		$res=mysqli_query($link,$sql);
		    if($res===false){
		        echo "fail";
		        exit;
		    }
		  //   $a=array();
		  //   while($arr=mysqli_fetch_assoc($res)){
		  //       // $b=array();
		  //       // $arrA=$arr["Tname"];
		  //       // $arrB=$arr["Tsex"];
		  //       // $arrC=$arr["Tno"];
		  //       // $arrD=$arr["Prof"];
		  //       // $b=array($arrA,$arrB,$arrC,$arrD);
		  //       // array_push($a,$b);
				// array_push($a,$arr);
		  //   }
		  $a=mysqli_fetch_all($res,MYSQLI_ASSOC);
		    echo json_encode($a);
			
		    mysqli_free_result($res);
		    mysqli_close($link);
	}
	
	//计算搜索结果的总个数
	function countNum($link,$sql){
		$res=mysqli_query($link, $sql);
		if($res===false){
		    echo "fail";
		    exit;
		}
		$arr=mysqli_fetch_row($res);
		echo json_encode($arr);
		
		mysqli_free_result($res);
		mysqli_close($link);
	}
	
	//增加数据
	function insert($link,$sql){
		$res=mysqli_query($link,$sql);
		if($res===false){
		    exit('fail');
		}
		
		$row=mysqli_affected_rows($link);
		if($row>0){
		    echo 'success';
		}else{
		    echo 'fail';
		}
		
		mysqli_close($link);
	}
	
	//编辑
	function update($link,$sql){
		$res=mysqli_query($link,$sql);
		if($res===false){
		    echo 'fail';
		    exit;
		}
		$row=mysqli_affected_rows($link);
		if($row>0){
		    echo 'success';
		}else{
		    echo 'fail';
		}
		
		mysqli_close($link);
	}
	
	//编辑页面默认显示数据
	function edit($link,$sql){
		$res = mysqli_query($link, $sql);
		if ($res===false) {
		    exit('fail');
		}
		$arr=mysqli_fetch_row($res);
		echo json_encode($arr);
		
		mysqli_free_result($res);
		mysqli_close($link);
	}
	
	function del($link,$sql){
		
	}
?>