<?php 

$link = mysqli_connect("172.19.0.2", "root", "abcde", "trucorp");

$query = mysql_query("SELECT COUNT(*) FROM users");

echo "Count <br>";
echo mysql_result($result, 0);

?>
