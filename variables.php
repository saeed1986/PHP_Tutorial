<?php
/*
$output = 'Hello World!';
echo $output;
/////////////////////////////////////////
$num1 = 4;
$num2 = 10;
$sum = $num1 * $num2;
/////////////////////////////////////////
$string1 = 'Hello';
$string2 = 'World!';
$greeting = $string1 .' '. $string2;
echo $greeting;
/////////////////////////////////////////
define('greeting', 'Hello Everyone');
echo greeting;
/////////////////////////////////////////


*/
#Array - Variable that holds multiple Values
/*
    -Indexed
    -Associative
    -Multi-dimensional
//Indexed
$people = array ('Kevin', 'Jeremy', 'Sara');
$ids = array (23, 55, 12);
$cars = ['Honday', 'Toyota', 'Ford'];
//echo $people[0];
/////////////////////////////////////////

# LOOPS -Execute code set number of times

/*
    For
    while
    Do .. while
    Foreach

# For Loop
# @params - init, condition, inc

for($i = 0;$i < 10; $i++){
    echo $i;
    echo '<br>';
}
*/

#Foreach Loop - For arrays
$people = array ('Brad' => 'brad@gmail.com','Jose' => 'Jose@gmail.com' ,'William' => 'William@gmail.com');
foreach($people as $person => $email){
    echo $person. ': '. $email;
    echo '<hr>';
}


?>