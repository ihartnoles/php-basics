<?php
$host = "localhost";
$username="root";
$password="love13";
$db="contacts_db";

$r = mysql_connect($host,$username,$password);
if (!$r) {
    echo "Could not connect to server<br>";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established<br>"; 
}

$r2 = mysql_select_db($db);

if (!$r2) {
    echo "Cannot select database<br>";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Database selected<br>";
}

$query = "SELECT * FROM contacts";

$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Query: $query executed<br>";
} 

while ($row = mysql_fetch_assoc($rs)) {
    echo $row['Id'] . " " . $row['name'] . " " . $row['email'] . "<br>";
}

mysql_close();

?>