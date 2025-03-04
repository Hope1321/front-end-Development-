<?php 
// $favcolor= "red";
// switch($favcolor){
//     case  "red";
//     echo" my favorate color is red";
//     case "blue";
//     break;
//     echo"my favaborate color is blue";
//     break;
//     case "Green";
//     echo" Ilike the the green color";
// }
// echo"<br>";
// $x=15;
// $y= 10;
// if($x> $y){
//     echo" the value of xi greater than value of y;";
// }

echo" Today is ". date("y/m/d")."<br>";
echo"Today is ". date(1);
$myfile= fopen("newfile.txt", "a") or die("unable to open  file ");
$text ="Hope duck \n";
fwrite($myfile, $text);
$text = "Good Day  good day for for all man \n";
fwrite($myfile, $text);
//fread($myfile, $text);
fclose($myfile);


?>