<?php

$countries =array(
    'DKI'=> 'Dki Jakarta',
    'JB'=> 'Jawa barat',
    'SB'=> 'Sumatera barat',
    'DI'=> 'Di Yogyakata',
    'ACH'=> 'Aceh',
);

print "Original\n";
print_r($countries);
echo "<br>";
echo "<br>";
print "move the Jawa barat to the top\n";
move_to_top($countries, 'DKI');
print_r($countries);
echo "<br>";
echo "<br>";
print "Move Sumatera barat to the buttom\n";
move_to_buttom($countries,'SB');
print_r($countries);
echo "<br>";
function move_to_top(&$array,$key)
{
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array =$temp + $array;
}
function move_to_buttom(&$array,$key)
{
    $value =$array[$key];
    unset($array[$key]);
    $array[$key] =$value;
}

?>