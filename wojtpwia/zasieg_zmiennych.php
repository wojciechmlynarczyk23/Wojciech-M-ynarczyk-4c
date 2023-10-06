<?php 

    $variable = 'aaaa'; 

    echo $variable . "<br />"; 

    $variable = 'bbbbb'; 
    echo $variable . "<br />";  

    function a(){ 
        $variable = 'cccc'; // to nie zmieni wartosci oryginalnej zmiennej 

    } 

    a(); 

    echo $variable . "<br />"; 

    function b(){ 
        global $variable; 

        $variable = 'dddd';
    } 

    b();  

    echo $variable . "<br />"; 

    function c () { 
        global $new; 

        $new = 'new';
    } 

    c(); 
     
global $new; 

echo $new . "<br />";  

include './other.php'; 

global $otherVariable; 

echo $otherVariable . "<br />"; 

d(); 

$a = 5; 
echo $a . "<br />"; 

function e($a){ 
    $a = 10;
} 

e($a); 

echo $a . "<br />"; 

function f(&$a){ 

} 

f($a); 

echo $a . "<br />";  
