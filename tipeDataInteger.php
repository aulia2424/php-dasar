<?php 
echo "-Tipe Data Integer-\n";

echo "Decimal : ";
var_dump(1234);


echo "Octal : ";
var_dump(01234);


echo "Hexadecimal : ";
var_dump(0x1A);


echo "Binary : ";
var_dump(0b11111111);


echo "Under score di Number : ";
var_dump("1_234_567");


// "FLOATING POINT"
echo "-Tipe Data Floating Point-";

echo "Floating Point : ";
var_dump(1.234);


echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);


echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3);


echo "Underscore di Floating Point : ";
var_dump("1_234.567");


// int OVERFLOW
echo "-Tipe Data Overflow-";

echo "Integer Overflow 32 Bit : ";
var_dump(9223372036854775808);


// array ada dua ada Number array dan associative
//number memanggilnya menggunakan number
// associative menggunakan namanya atau value tetapi bukan number

$lemariBaju = array("Baju", "Topi", "Sepatu");
echo $lemariBaju[0]; // ini menggunakan number
echo $lemariBaju["Baju"]; // ini menggunakan associative

//two-dimensional array
$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('John', 'Rob', 'Jack'),
    'away'=>array('Arthur', 'Daniel')
 );
?>