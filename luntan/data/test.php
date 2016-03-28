<?php
header("Content-type: text/html; charset=utf-8");
 $host = "localhost";
 $user = "root";
 $pass = "jie";
 $database = "luntan";
 $port = 3306;
 $socket = null;

 $mysqli = null;
 $results = null;

//Open a new connection to the MySQL server
$mysqli = new mysqli($host,$user,$pass,$database);

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}else{
    echo "right";
}

$results = $mysqli->query("SELECT * FROM lun_title");
echo '<meta http-equiv=Content-Type content="text/html;charset=utf-8">';
print '<table border="1">';
while(($row = $results->fetch_assoc() )!==null) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
//     print '<td>'.$row["uid"].'</td>';
    print '<td>'.$row["name"].'</td>';
    print '<td>'.$row["context"].'</td>';
    print '</tr>';
}
print '</table>';

// Frees the memory associated with a result
$results->free();

// close connection
$mysqli->close();
