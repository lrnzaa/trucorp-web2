<?php

$link = mysqli_connect("172.19.0.2", "root", "abcde", "trucorp");

$query = "SELECT * FROM users";

$result = $link->query($query);

if(!$link)
{
 echo "Not Connected to SQL" . PHP_EOL;
 exit;
}
else
{
 foreach($result as $row)
 {
   echo "[ID] " . $row["ID"] . "<br>";
   echo "[Nama] " . $row["Nama"] . "<br>";
   echo "[Kantor (Pusat/Cabang)] " . $row["Kantor"];
 }
}

mysqli_close($link);

?>
