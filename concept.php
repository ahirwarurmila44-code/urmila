<?php

//Difference B/W = and == and ===

$a = 5;  $b = 5;

// Assignment operator
// =   used to assign a value to a variable.

$x = 4; $y = "kldsfj";

// Equality operator
// ==   compare varibles value;

$a == $b;

// Identity operator 
//  ===   compare variables value and types

$a === $b;  //false



20. require vs autoloader

require → manually includes files.

autoloader → automatically loads classes.

spl_autoload_register(function($class){ require $class.'.php'; });
