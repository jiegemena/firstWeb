<?php
session_start();
if($_POST['submit']){
    //提交的信息存在
    if($_POST['title'] && $_POST['context']){
        include_once 'conn_user.php';
        $link = new conn_user();
        //判断是否登录
        if($_SESSION["name"] && $_SESSION["pass"]){           
            //跟数据库比对返回userid
            $user_id = $link->get_id($_SESSION["name"], $_SESSION["pass"]);
            if($user_id){
                //添加信息
                include_once 'conn_luntan_context.php';
                $data = new conn_luntan_context();
                $result = $data->add($user_id, $_POST['title'], $_POST['context']);
            }
        }         
    }else{
        echo "不能为空！";
    }
    
    //页面重定向
//     header("Location:../index.php");
    echo '<meta http-equiv="refresh" content="1; url=../index.php"> ';
}elseif($_POST['submit_login']){
    if($_POST['name'] && $_POST['pass']){
        //添加信息       
       session_start();
       include_once 'conn_user.php';
       $link = new conn_user();
       if($link->login($_POST['name'], $_POST['pass'])){
           $_SESSION["name"] = $_POST['name'];
           $_SESSION["pass"] = $_POST['pass'];
           echo "登录成功";
       }else{
           echo "用户名或密码错误";
       }
       
    }else{
        echo "不能为空！";
    }
    
    //页面重定向
    //     header("Location:../index.php");
    echo '<meta http-equiv="refresh" content="1; url=../index.php"> ';
}
?>
