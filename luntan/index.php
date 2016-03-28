<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/context.css" type="text/css" />
<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<link href="css/xiang.css" rel="stylesheet">
	<title>许愿墙</title>
</head>
<body>
<div  id = "bottom">
   <div id = "top_items">title
        <?php             
            if($_SESSION['name'] && $_SESSION['pass']){
                include_once 'data/conn_user.php';
                $link = new conn_user();
                if($link->login($_SESSION['name'], $_SESSION['pass'])){
                     echo "欢迎：{$_SESSION['name']}"."<a  href = 'out.php'>注销</a>";
                     echo '<input type="button" id="add" onclick="show()" value="添加"></input>';
                }
            }else{
                     echo '<input type="button" id="login" value="登录" onclick= "show_login()"/>';
                     echo '<input type="button" id="add" onclick="new_login()" value="添加"/>';
                }
        ?>       
   </div>
    <div id="context_items">
         <?php
             include_once 'data/conn_luntan_context.php';
             $data = new conn_luntan_context();
             $result = $data->show_title();
             foreach ($result as $key=>$re){
                 echo "<div id = 'div{$re[id]}'>";
                 echo "主题：".$re[title]."<br/>";
                 echo "<p>正文：".$re[context]."</p>";
                 echo "</div>";
             }           
         ?>
    </div>
    <div id="footer_items">
    
    </div>
</div>
<div id = "center" style="display: none;"></div>
<div id = "top" style="display: none;">
<form method = "post" action="data/addtitle.php">
   <table>
     <tr>
        <td>主题：</td>
        <td><input  name="title"  type ="text"/></td>
     </tr>
     <tr>
        <td>正文：</td>
        <td><textarea name="context" style="width:200px;height:80px;"></textarea></td>
     </tr>
     <tr>
        <td></td>
        <td><input type ="submit" name='submit'  value= "提交" onclick="hide()"/>
        <input type ="button"  value= "取消" onclick="hide()"/></td>
     </tr>
   </table>
</form>
</div>

<div id = "top_login" style="display: none;">
<form method = "post" action="data/addtitle.php">
   <table>
     <tr>
        <td>用户名：</td>
        <td><input  name="name"  type ="text"/></td>
     </tr>
     <tr>
        <td>密码：</td>
        <td><input  name="pass"  type ="text"/></td>
     </tr>
     <tr>
        <td></td>
        <td><input type ="submit" name='submit_login'  value= "登录" onclick="hide()"/>
        <input type ="button"   value= "取消" onclick="hide()"/></td>
     </tr>
   </table>
</form>
<a href = "new_user.php">注册</a>
</div>

</body>
</html>