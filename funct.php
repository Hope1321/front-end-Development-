<?php 
function myfunction($fname, $year){
    echo" hello my family Name is  ". $fname."  and  was born in this years ".$year."<br>";
}

myfunction("Hope ", "1996");
myfunction("Dad ", "1822");
myfunction("Abel ", "1222");
myfunction("sosiy ", "20202");

function calculate($x, $y=10){
    $z= $x + $y;
    $m= $x*$z;
    echo" the sum of x and y is : "."<br>".$z." and also the multiplication of this is: "."$m"."<br>";

}
calculate(8,2);
calculate(3, 5);
function sumnumber(...$x){
    $n =0;
    $len= count($x);
    for($i= 0; $i< $len; $i++){
        $n += $x[$i];
    }
    return $n;
}
echo"<br>";
$f= sumnumber(3,2,4,6,1, 7);
echo"$f"."<br>";

// now arrays of php
$car= array("volvo", "Toyota", "vhh", "nothing");


?>