<?php
    // 接口
    // 提供数据和查询数据

    // 登录
    // 1. 连接数据库
    // 2. 接收前端传来的账号密码
    // 3. 在数据中查找 匹配的账号密码
    //    如果找到 表示 登录成功
    //    如果没有找到  提示 用户名或密码错误  跳转页面到 登录页

    include('conn.php');
    // 一、获取前端发送来的数据（用户名和密码）
    $name = $_POST["user"];
    $pass = $_POST["pass"];

    // 2、执行sql语句
    $sql = "select * from user where phone='$phone' and userpass='$userPass'";
    $result = mysqli_query($conn,$sql);    

    // 3、关闭数据库
    mysqli_close($conn);

    // 三、响应(就是使用echo)
    if($result){
        echo '<script>alert("登录成功");</script>';
        echo '<script>location.href="index.html";</script>';
    }else{
       die  $name;
       die  $pass;
        echo '<script>alert("用户名或密码不正确.");</script>';
        echo '<script>location.href="eg04.login.html";</script>';
    } 
?>