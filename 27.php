<?php

/* PHP 27) WAP to demonstrate default parameter to function */


function greet($name = 'Vaibhao') {
    echo "Hello, $name!";
}

// Call the function with the default parameter
greet(); // Output: Hello, Vaibhao!

// Call the function with a custom parameter
greet('Kamble'); // Output: Hello, Kamble!

?>
