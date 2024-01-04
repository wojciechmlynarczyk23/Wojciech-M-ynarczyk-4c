<?php 
require_once "dog.php"; 
$dog = new Dog('Buddy',"Golden Retriever",5); 
var_dump($dog); 

$dog -> name = "Max"; 
echo "<br>";  

var_dump($dog); 

$dog->breed = 'Poodle'; 
var_dump($dog); 

$dog->age = 6; 
$dog->growOlder(); 
var_dump($dog);
?>