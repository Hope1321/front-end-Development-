 <?php 
// class fruit{
//     public $name;
//     public $color;

//     //funtion or method
//     function set_name($name){
//         $this->name= $name;
//     }
//     function get_name(){
//        return  $this-> name;
       
//     }
// }
// $apple= new fruit();
// $mango= new fruit();
// $apple->set_name("Apple");
// $mango->set_name("Mango ");
// echo $apple->get_name();
// echo "<br>";
// echo "my best fruit is ". $mango->get_name();


?>
<?php 
class Fruits{
    public $Name;
    public $Color;
     
    function __construct($Name){
       $this->Name= $Name;
        
    }
    function get_name(){
        return $this->Name;

    }
}
$apple= new Fruits("APPle Days for all ");
echo $apple-> get_name();


?>