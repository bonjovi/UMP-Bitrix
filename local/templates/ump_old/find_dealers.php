<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('127.0.0.1','allsites','ytktpmd,fpeUFL11!!','umpcontacts');

$mysqli->set_charset("utf8");

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$city = $_GET['city'];

//MySqli Select Query
$results = $mysqli->query("SELECT * FROM `contacts` WHERE city = '{$city}' AND retail = 1");

/*print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
    print '<td>'.$row["company"].'</td>';
    print '<td>'.$row["city"].'</td>';
    print '<td>'.$row["address"].'</td>';
    print '</tr>';
}
print '</table>';*/
$result_array = array();
while($row = $results->fetch_assoc()) {
    array_push($result_array, $row);
}

echo json_encode($result_array);



// Frees the memory associated with a result
$results->free();

// close connection
$mysqli->close();
?>