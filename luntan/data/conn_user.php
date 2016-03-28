<?php
include_once 'mysql.php';
class conn_user{
    private $tab = "luntan_user";
    private $db=null;
    
    function __construct(){
       $this->db = new luntan_sql();
    }
    
   function add($name,$pass,$context){
        $query = "insert into luntan_user(id,name,pass,context) values (NULL,'{$name}','{$pass}','{$context}')";
        echo "query:".$query;
        return $this->db->luntan_query($query);
    }
    
    //登录信息检查，如果正确返回id，错误返回false
    function get_id($user,$pass){
      if( $this->login($user,$pass)){
           $query = "select id from {$this->tab} where name = '{$user}'";
           return $this->db->luntan_query($query)->fetch_assoc()['id'];
       }       
    }
    
    
    //登录信息检查，如果正确返回1，错误返回空
    function login($user,$pass){
        $query = "select id from {$this->tab} where name = '{$user}'";
        $id = $this->db->luntan_query($query)->fetch_assoc();
        if($id !== null)
        $query = "select pass from {$this->tab} where id = '{$id[id]}'";
        else return false;
        return $pass === $this->db->luntan_query($query)->fetch_assoc()['pass'];
    }  
    
}