<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phploginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName );

if (!$conn) {
    die("Connection failed:" . mysqli_connet_error());
}
