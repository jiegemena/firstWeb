<?php
header('Content_type:text/html;charset=utf-8');
session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',time()-3600,'');
echo '<meta http-equiv="refresh" content="0;  url=index.php">'; 
?>