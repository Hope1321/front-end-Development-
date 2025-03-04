
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background-color: gray;
        
      }
      form{
        border-radius: 5px;
        background-color: blanchedalmond;
      }
    </style>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
   Name : <input type="text" id="Name", name="name"><br><br>
   Email: <input type="email" name="email" id="email"><br><br>
Password: <input type="Password" id="Password", name="password"> <br> <br>
website: <input type="website" name="website"> <br> <br>
comment: <textarea name="comment " id="comment" cols="25" rows="4"></textarea> <br> <br>
<Gender:br>Gender</Gender:br> <input type="radio" name="gender" value="Male"> Male <br>
<input type="radio" name="gender" value="Female">Female <br>
<input type="radio" name="gender" value="Other"> Other<br><br>
      <input type="Submit" id="Submit"> 

</form>
  <?php 
  $name= $email= $password= $website= $comment= $gender=" ";
  if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name= Test($_POST["name"]);
    $email= Test($_POST["email"]);
    $password= Test($_POST["password"]);
    $website= Test($_POST["website"]);
    $comment= Test($_POST["comment"]);
    $gender= Test($_POST["gender"]);

    $name= htmlspecialchars($_REQUEST['name']);
    
  }
  function Test($data){
    $data =trim($data);
    $data= stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
  $nameErr= $emailErr= $passwordErr= $genderErr= "";
  $name= $email= $password =$comment= $gender =" ";
  if($_SERVER['REQUEST_METHOD']== "POST"){
    if(empty($_POST["name"])){
      $nameErr=  " please fill name space!!! ";
    }
    else{
      $name = Test($_POST["name"]);
    }
    if(empty($_POST["email"])){
      $emailErr= "Error email try !!";
      
    }
    //elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //$emailErr[]= "emails are errors so try agains";

    //}
    else{
      $email= Test($_POST["email"]);
    }
    if(empty($_POST["password"])){
      $passwordErr= "Incorrect password try.";
    }
    else{
      $password = Test($_POST["password"]);
    }
    if(empty($_POST["gender"])){
    $genderErr= " choose one space is not accepted";
    }
    else{
      $gender = Test($_POST["gender"]);
    }
  }


  
  ?>  
</body>
</html>

