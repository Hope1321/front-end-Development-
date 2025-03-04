<?php 
//create connection 

 $cont= mysqli_connect("localhost", "root", ""); 
 if(!$cont){
     die("connected is failed: ". mysqli_connect_error());
 }
 
 
//create database
$sql= "CREATE DATABASE MyDB";
if(mysqli_query($cont, $sql)){
    echo "database is created succesfully ";
}
else{
    echo "Error created database: ". mysqli_error($cont);
}
mysqli_close($cont);


?>