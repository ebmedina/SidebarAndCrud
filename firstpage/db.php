<?php

$server = "sql104.epizy.com";
$username = "epiz_33834484";
$password = "SZ1i9OztOR";
$dbname = "epiz_33834484_dbact2";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("COnnection Failed: ".mysqli_connect_error());

}

?>