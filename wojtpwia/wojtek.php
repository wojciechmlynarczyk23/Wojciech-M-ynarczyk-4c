<?php 
 // typ boolean
 $b1 = true; 
 $b2 = false; 

 //typ integer 
 $i1 = 2137; // decimal  
 $i2 = 0x45; // hex 
 $i3 = 0420; // octal 
 $i4 = 0b1000101; // binary 

 // typ float 
 $f1 = 69.420; 

 // typ string 
 $s1 = 'sample 1'; 
 $s2 = 'sample 2';  

 //heredoc
$s3 = <<< 'LABEL' 
    eloloeloeloeloeloelloelooleloeloelloe 
LABEL; 

//nowdoc 
$s4 = <<< 'DUPSKOREL' 
    dqdwqdqwdiq iwodu   hwqudg  iwug    qiuwd 
DUPSKOREL; 

echo "michas to frajer"; 
echo "<br />"; 

echo $s1; 

//typy tablicowe  
$arr = ['eloelo', 12235, 3.145 ]; 

//tablica asocjacyjna 
$asoc = [ 
    'k1' => 82525; 
    'q2'=> 'zgerypala' ; 
    5 => 3.689; 
]
//tablica tablic 
$arrOfArr = [ 
    ['12', 23456, 3.134], 
    ['eloelomichasdebil', "jpxdddd", "xpp"]

];
 
//typ obiektowy 
$o1 = new stdClass(); 
$o1 ->attr = 694202137; 

//funkcje  
function f1() { 
    echo "hello world"; 
}

f1(); 
 
function f2(): void { 
    echo $a1 + $a2;
}

f2(); 

function f3($a1, $a2) 
{ 
    echo $a1 + $a2;
}
function f4(int $a1, int$a2): void 
{ 
    echo $a1=$a2; 
} 

function f5(string %a): string { 
    return $a . 'by f5()';
} 
?>