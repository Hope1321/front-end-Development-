<?php 
require "connection.php";
$sql= "create database db";
if(mysqli_query($conn, $sql)){
    echo" database is succesfully created";
}
else{
    echo" database is error created". mysqli_error();
   
}
mysqli_close($conn);

?>