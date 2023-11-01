//WAP to implement all the inbuilt array functions like array_pad(), array_slice(), array_splice(), list(), all kinds of sort(), search() etc.


<?php 
 
$input = array("red", "blue", "orange", "yellow", "purple", "green"); 
$replacement = array("mango", "banana", "grapes"); 
 
echo("Performing array splice"); 
echo("<br>"); 
$result = array_splice($input, 4); 
print_r($result); 
echo("<br>");echo("<br>"); 


 
echo("Performing array slice"); 
echo("<br>"); 
$result1 = array_slice($input, 1, 3); 
print_r($result1); 
echo("<br>");echo("<br>"); 
 
echo("Performing array pad"); 
echo("<br>"); 
$numbers = array(5, 10, 15); 
print_r(array_pad($numbers, 5, 2)); 
echo("<br>");echo("<br>"); 
 
echo("Performing list"); 
echo("<br>"); 
$my_array = array("Scorpio","Swift","Baleno"); 
list($a, $b, $c) = $my_array; 
echo "I like to drive $a, $b and  $c."; 

echo "<br>";
echo "<br>";

natsort($my_array);
echo "Natural order: ";
echo "<br>";
print_r($my_array);




?>



