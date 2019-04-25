<?php

namespace test;

include_once 'calculator.php';

var_dump(Calculator::divide(10, 5));

echo '<br>';
var_dump(Calculator::divide(10, 0));

echo '<br>';
var_dump(Calculator::divide(10, 10));

echo '<br>';
var_dump(Calculator::add(15, 2));

