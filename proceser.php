<?php
if($_SERVER['REQUEST_METHOD']=='$_POST'){
    $name= $_POST['name'] ?? ' ';
    $email= $_POST['email'] ?? ' ';
    $errors= [];

if(empty($name)){
    $errors[]= "Name is Required.";
}
//validate email
if(empty($emails)){
    $errors[]= "Email is Required. ";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[]= "Invalid Email format. ";
}
//Display errors or success messages
if(!empty($errors)){
    echo "<ul>";
    foreach($errors as $errors){
        echo "<li> $errors</li>";
    }
    echo"<li>$error</li>";
}
else{
    echo"<p> Form submitted seccesfully! </p>";
    echo"<p> Name: ".htmlspecialchars($name)."</p>";
    echo"<p> Email: ".htmlspecialchars($emails)."</p>";

}
}



?>