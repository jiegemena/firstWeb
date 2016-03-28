<?php
session_start();
include_once 'conn_user.php';
$link = new conn_user();
if($link->login('jiege', 'jiege')){
    
}