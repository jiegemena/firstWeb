<?php
if($_POST['new']){
    session_start();
    if($_POST['name'] && $_POST['pass']){
        echo $_POST['name'] ."====". $_POST['pass']."===". $_POST['context'];
        include_once 'data/conn_user.php';
        $link = new conn_user();
        if($link->add($_POST['name'], $_POST['pass'], $_POST['context'])){
            $_SESSION["name"] = $_POST['name'];
            $_SESSION["pass"] = $_POST['pass'];
            echo '<meta http-equiv="refresh" content="0; url=index.php"> ';
        }
    }else{
        echo "error user/pass";
        echo '<meta http-equiv="refresh" content="1; url=index.php"> ';
    }    
}else{
    
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/context.css" type="text/css" />
<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<link href="css/xiang.css" rel="stylesheet">
	<title>新用户</title>
</head>
<body>
   <form method = "post" action="new_user.php">
       <div>
           <table>
             <tr>
                <td>用户名：</td>
                <td><input type = "text" name = "name"/></td>
             </tr>
             <tr>
                <td>密码：</td>
                <td><input type = "password" name = "pass"/></td>
             </tr>
             <tr>
                <td>信息:</td>
                <td><input type = "text" name = "context"/></td>
             </tr>
             <tr>
                <td></td>
                <td><input type = "submit" name = "new" value = "注册"/></td>
             </tr>
           </table>
       </div>
   </form>
</body>
</html>