//WAP to implement regular expressions including modifiers, operators and metacharacters.


<?php 
 
echo "<h1>Modifiers</h1>";
echo "<p> i modifier </p>";
echo "Pattern  = cat <br> String = CAT is not a dog <br>";
 
$pattern1 = "/cat/i";
 
$string ="CAT is not a dog";
 

$result = preg_match($pattern1,$string);
if($result){
    echo "<br>cat found";
}
else{
    echo "<br>cat not found";
}
 
 
echo "<h1> Operators</h1> ";
 
echo "Pattern  = ^cat|dog|boy <br> String = CAT is not a dog <br>";
 
$pattern1 = "/^cat|dog|boy/";
 
$string ="CAT is not a dog";
 
$result = preg_match($pattern1,$string);
if($result){
    echo "<br>found";
}
else{
    echo "<br>not found";
}
 
 
echo "<h1> Metacharacters </h1> ";
 
echo "Pattern  = ^[a-z\d]+.com <br> String = 123.com is my domain name <br>";
 
$pattern1 = "/[a-z\d]+.com/";
 
$string ="123.com in my domain name";
 
$result = preg_match($pattern1,$string);
if($result){
    echo "<br>found";
}
else{
    echo "<br>not found";
}
 
 
 
 
 
?>










