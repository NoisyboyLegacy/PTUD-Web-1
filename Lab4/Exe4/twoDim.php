<?php

$array = [
    'web' => ['html', 'css', 'bootstrap'],
    'p_lang' => ['php', 'python', 'cabbage'],
    'framework' => ['laravel', 'codeigniter']
];


echo "<pre>";
//before adding new values 
echo "Before add the value:- ";
print_r($array);
echo "<br>";
echo "</pre>";

echo "<pre>";
//add elements/values in array
echo "add elements/values in array";

array_push($array['framework'], 'wordpress', 'joomla');
print_r($array);
echo "</pre>";
echo "<pre>";

//after adding a new values
echo "After add the value:- ";
print_r($array);

echo "</pre>";
