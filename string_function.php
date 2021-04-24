<?php
# substr()

//$output = substr('Hello', 1); // ello
//$output = substr('Hello', 1, 3); // ell
//echo "$output";

# Return a portion of a string
//$output = strlen('Hello World!'); // 11 counting the character and including space
//echo $output;

#strpos()
#Finds the Positon of the first occurence of a sub string
//$output = strpos('Hello World', 'o');
//echo $output

#is_string
$values = array(true, false, null, 'abc', 33, '33', 22.4, '22,4', '', ' ', 0, '0');

foreach ($values as $value) {
    if (is_string($value)) {
        //print_r($value . "<br>");
        echo "{$value} is a string<br>";
    }
};
