<?php

class Student{
public $firstName = "Thomas";
public $lastName = "Pepin";
public $studentId = 18;
}

$studentObj = new Student;

$arr = (array) $studentObj;
print_r($arr);
$reverse = array_reverse($arr);
print("<br>");
print_r($reverse);
print("<br>");

$x = 5;
$y = 3;
while($x > 0){
    
    while($y >0){
        echo $y . "<br>";
        break;
    }
    echo $x . "<br>";
    break;
}

function globalVarTest(){
    global $glo;
    $glo = "Global variable";
    $loc = "Local variable";
}
globalVarTest();
echo $glo;
//echo $loc;
//OUTPUT if we call echo $loc => Warning: Undefined variable $loc in C:\xampp\htdocs\FileFolder\StudentMethod.php on line 37

function counterStatic(){
    static $counter = 1;
    return $counter++;
}
for($i = 4 ; $i > 1 ; $i--){
    echo "<br> ";
print counterStatic();
}
echo "<br>";
$string1 = "Hello World";
$string2 = "Bye";
echo str_replace("world", "bye", "Hello world");
echo "<br>";
echo str_ireplace("world", "bye", "hello world");
echo "<br>";
echo str_repeat("Hello", 5);
echo "<br>";
echo str_shuffle("hello");
echo "<br>";
print_r(str_split("Hello", 2));
echo "<br>";
print_r(str_word_count("Hello this is a world count"));
echo "<br>";
print_r(strncmp("Helloaaa", "World", 5));
echo "<br>";
print_r(strrev("Hello"));

?>