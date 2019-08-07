<?php

    //1.获取界面 传递来的data数据 key 
    $name=$_POST['uname'];
    $psd=$_POST['upsd'];
    //连接数据---查询 ---
    $con=mysqli_connect('localhost','root','','1902');
    if($con){
        mysqli_query($con,'set names utf8');
        //sql语句
        //1.拿着账号用户名去做查询  查看数据里面是否存在，如果存在不能注册了（不添加）
        //  如果不存在 把数据添加到数据里面
        $sql="select * from userinfo where name='$name'";
        $result=mysqli_query($con,$sql);//
        //$result->num_rows > 0;//查到数据 
        if($result->num_rows > 0){
            //查到数据了  数据里面存在了账号  
            echo 2;//2 失败 不能注册
        }else{
            //没有查到数据  注册  添加信息
            $sql="insert into userinfo(name,password) values('$name','$psd')";
            $result=mysqli_query($con,$sql);//执行插入
            echo 1;//成功
        }

    }else{
        echo '数据连接失败';
    }

    mysqli_close($con);


?>