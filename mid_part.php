<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend development</title>
    <style>body{
        background-color: burlywood;
    }</style>
</head>
<body>
<?php
   /* $name= 3;
    echo"$name";
    $x= "john";
     
    function test(){
        static $z= 1;
        $y= "johnes";
        global $x;
        $z++;
        echo"HEllo every one with $y";
        echo"<p> this also outside of the function $x</P>";
        echo "<p> $z </p>";
    } 
    test();
    echo"HEllo every one with $x";
    test();
    test();
    test();

    $name = "'Linus'";
function myTest() {
  $name = 'Tobias';
}
myTest();
echo $name; 
echo " hello good evening every one this lab <br>" ; 
$bo= "Good is Good aat anny time ";
echo str_word_count("GOd is always Good so dont woory any one <br>")."<br>";
echo"######################## <br>";
echo strlen($bo) */
/*define("name", "welcome to Haramaya university and CCI <br>", false);
const nmame= " hello every body <br>";
function test(){
    echo name;
    echo nmame;
    
}
test();
define("cars", ["tiyota", "volvo", "v8"]);
echo cars[1] ."<br>";

$x= 4;
$x= 23;
echo "<br>";
if($x >= 10){
    echo"  for check up only";
}

echo  " the man is the grate <br>";
$y= date("H");
if($y< "1"){
    echo"Good time";
} 
else{
    echo"not good day";
}
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
    echo"<br>";
}
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);*/
 echo"/////************\\\\\\\#######33<br><br>";
 

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>", method="$_POST">
  Text Fields:<br><br>

 Name: <input type="text" name="name"><br><br>
 E-mail: <input type="text" name="email"> <br><br>
Website: <input type="text" name="website"><br><br>
 Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
  Radio Buttons:
 Gender:
 <input type="radio" name="gender" value="female">Female<br>
 <input type="radio" name="gender" value="male">Male<br>
 <input type="radio" name="gender" value="other">Other<br><br>
 <input type="Submit" name="submit" id="submit">
 
 <input type="checkbox" name="AAA">AAAA
 <input type="Checkbox" name="AAA" id="BBBBB">BBBB
 <input type="combobox" name="AAA" id="CCCC">CCCC
 </form>
 <?php 
 if($_SERVER["REQUEST_METHOD"=='POST'])
  $name= $_SERVER["name"] ?? "";
  $email= $_SERVER["email"]??"";
  $Errors= [];

 
 
 ?>


    
</body>
</html>