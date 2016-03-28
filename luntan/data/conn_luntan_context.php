<?php
header("Content-type: text/html; charset=utf-8");
include_once 'mysql.php';
class conn_luntan_context{
    private $db = null;
    function __construct(){
        $this->db = new luntan_sql();
    }
    
    function show_title(){
//         $query = "select * from lunatan_title left join luntan_child on lunatan_title.id = luntan_child.parent_id";
//         $query = "select * from luntan_title inner join luntan_user on luntan_title.uid = luntan_user.id";
//         return $this->db->luntan_query($query);   
        $query = "select * from luntan_title";
        return $this->sql_array($this->db->luntan_query($query));
    }
    
    function __destruct(){
        $this->db->__destruct();
    }
    
    function add($uid,$title,$context){
        $query = "insert into luntan_title(id,uid,title,context)values(NULL,{$uid},'{$title}','{$context}')";
//         echo "query:".$query;
        return $this->db->luntan_query($query);
    }
    
    function delete(){
        $query = "delete from ";
    }
    
    function sql_array($result){
        $i=0;
        while( ($row = $result->fetch_assoc()) !==null ) {
            $array_row[$i++]= $row;
        }
        return $array_row;
    }
}