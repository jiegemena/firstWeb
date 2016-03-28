<?php
header("Content-type: text/html; charset=utf-8");
class luntan_sql{   
    private $host = "localhost";
    private $user = "root";
    private $pass = "jie";
    private $database = "jie_luntan";
    private $port = 3306;
    private $socket = null;
    
    private $mysqli = null;
    private $results = null;
    
    function __construct(){
        $this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->database);
        if ($this->mysqli->connect_error) {
            die('Error : ('. $this->mysqli->connect_errno .') '. $this->mysqli->connect_error);
        }
       $this->mysqli->query("set character set 'utf8'");
       $this->mysqli->query("set names charset utf8");
       
    }    
    function luntan_query($query){
        return $this->results = $this->mysqli->query($query);
    }
    
    function __destruct(){
       $this->results->free();
       $this->mysqli->close();
    }
   
}
// //Open a new connection to the MySQL server
// $mysqli = new mysqli($host,$user,$pass,$database);

// //Output any connection error
// if ($mysqli->connect_error) {
//     die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
// }else{
//     echo "right";
// }

// $results = $mysqli->query("SELECT * FROM luntan_user");

// print '<table border="1">';
// while($row = $results->fetch_assoc()) {
//     print '<tr>';
//     print '<td>'.$row["id"].'</td>';
//     print '<td>'.$row["name"].'</td>';
//     print '<td>'.$row["pass"].'</td>';
//     print '</tr>';
// }
// print '</table>';

// Frees the memory associated with a result
// $results->free();

// // close connection
// $mysqli->close();

?>