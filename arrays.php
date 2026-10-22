<?php
// associative array
$student = array(
    "name" => "Samar",
    "level" => 5,
    "major" => "Intelligence Systems & Computer Engineering", 
    "grade"=> 'A', 
);
// addition 
$student["age"] = 21;
$student["graduated"] = false;
//  updating 
$student["level"] = 4;

// searching 
$key = array_search('Samar', $student); 
echo "The key for value 'Samar' is: " . $key . "<br>";

if (array_key_exists('major', $student)) 
    echo "The key 'major' exists in the array.<br>";

// Displaying using print_r
echo '<pre>';  print_r($student);  echo '</pre>';

// Displaying using var_dump
echo '<pre>';
var_dump($student); 
echo '</pre>';

?>