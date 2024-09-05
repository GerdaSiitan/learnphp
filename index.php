+<?php

$a = 1;
$a++;
$a--;
$a+=2;
$a-=2;
$a*=2;
$a/=2;
$a%=2;

$a = 'sigma' . $a;
$a .='skibidi';

$array = ['essa' => 1,'teine' => 2,'kolm'=> 3];

var_dump($array);

foreach($array as $key => $value){
    echo "$key=>$value\n";
}

$name = 'Rizzler';

$string = "hello $name\n";
var_dump($string);

for($i=0;$i<26;$i++){
    var_dump($char);
    $char++;
}
?>