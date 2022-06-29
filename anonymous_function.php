<?php
// $greet = function($name)
// {
//     printf("Hello %s\r\n", $name);
// };

// $greet('World');
// $greet('PHP');

// // Assign an anonymous function to a variable
// $greet = function( $name, $timeOfDay ) {
// return "Good $timeOfDay, $name!";
// };
// echo $greet("Omran","Morning");
// //Result: Good Morning Omran!



// // Assign an anonymous function to a variable
// $greet = function($name)
// {
//     printf("Hello %s\r\n", $name);
// };

// $greet('World');
/* 
Result: 
    Hello World
    Hello PHP 
*/

// Pass Lambda to function
// function hello ($message){
// echo $message();
// }

// // Call function
// hello(function(){
// return "Hello world";
// });


// $arr = range(5, 50);
// foreach(array_filter($arr, function($val) { return $val % 5 == 0; }) as $val) {
//     echo $val,"\n";
// }
// //Result: 25,30,35,40,45,50

// $hello="Asif";
// $output=function(){
// echo "Welcome ".$hello;
// };

// $output(); // will show error


$hello="Asif";
$output=function() use($hello){
echo "Welcome ".$hello;
};

$output();
//output: Welcome Asif