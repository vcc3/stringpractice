<?php


$firststring = "Hello you";
$secondstring = "wonderfully confused man.";

//Will produce the error: Undefined variable: $foo_
echo "$firststring_$secondstring";

//Will print the intended string: "foobar_barbaz"
echo "{$firststring}_$secondstring";

?>