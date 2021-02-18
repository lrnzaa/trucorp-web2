<?php 

$link = mysqli_connect("172.19.0.2", "root", "abcde", "trucorp");

$query = "SELECT * FROM users";
$result = $link->query($query);

echo "Count total: <br>";

if(!$link)
{
 exit;
}

$count = 0;

foreach($result as $row)
{
 $count += 1;
}

echo $count;

?>
