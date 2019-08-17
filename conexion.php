<?php

$hostname = "sql209.byetcluster.com";
$dbusername = "epiz_24169932";
$dbpassword = "mwA19znuPCucDV";
$db = "epiz_24169932_proyecto";

$conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $db);

    if (!$conexion) {
      die("Database connection failed: ");
    }
?>