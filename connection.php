<?php
 $conn= mysqli_connect("localhost", "root","");
 if(!$conn){
        die("Database is failed". mysqli_connect_error());

    }
    else{
        echo"Database is succesfully connected";
    }

 
?>