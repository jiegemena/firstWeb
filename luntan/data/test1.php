<?php
include_once 'conn_user.php';
$link = new conn_user();
echo "login:".$link->login('jie2ge', 'jisege');