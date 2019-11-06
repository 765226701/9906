<?php
    header("content-type:text/html;charset=utf-8");
    $u=$_REQUEST['u'];
    $p=$_REQUEST['p'];
    $link=mysqli_connect("127.0.0.1","root","root","demo");
    mysqli_set_charset($link,"utf8");
    if($link===false){
        exit("连接数据库失败！");
    }
    //执行
    $sql="select * from student where Sname='$u' and Spwd='$p'";
    $res=mysqli_query($link,$sql);
    if($res===false){
        echo "fail";
        exit;
    }
    $arr=mysqli_fetch_row($res);
    if(is_array($arr)){
        $str="ABCDEFGHIGKLMMN0123456789abcdefghigk";
        $strN=str_shuffle($str);
        $token=substr($strN,0,9);
        array_push($arr,$token);
        echo json_encode($arr);
    }else{
        echo "fail";
    }
    //释放结果集  关闭
    mysqli_free_result($res);
    mysqli_close($link);
?>