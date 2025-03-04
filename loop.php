<?php
/*$num= 10;
for($i= 1; $i<10;$i++){
    echo"<p>  $i* $num=  ".$num*$i;}

function greeting(){
    echo"  hello  how was";
}
echo greeting();


$name= "talila";

function student($name, $age= 334){
  echo" studednt name is $name and  age is $age";

}
echo "<br>";
echo student(" tolaa");
echo "<br>";
function sum($x, $y){
    $sum= $x + $y;

    return "THe sum is = $sum";

}
echo sum(4, 7)
*/

echo "##########################################";
function myfamily($Lname, ...$Fname){
$txt= "";
$len= count($Fname);
for($i= 0; $i<$len; $i++){
$txt= "$txt Hi, $Fname[$i] $Lname <br>";

}
return $txt;
}
$b= myfamily("john", "mlata", "gudata", "waqayya");
$c= myfamily("Hope", "tesfaye", "chala","gadisa");
myfamily("dddd");
myfamily("bob");
echo $b, $c;
echo"////////////////////////////////////<br>";
function add_num($value){
    $value+= 5;
}
$num= 2;
add_num($num);
echo $num;
?>
