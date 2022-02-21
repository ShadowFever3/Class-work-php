<?php
function rep($val, $num){
    for($i = 0; $i < $num; $i++):
        echo $val;
endfor;
}

function rep2($val, $num){
    $i = 0;
    while($num > $i){
        echo $val;
        $i++;
    }
}
$first = "wow";
$second = 3;
echo "<br>", rep($first, $second);
echo "<br>", rep2($first, $second);



#STR_SHUFFLE
function shuffle1($string){
    $arr = str_split($string);
    $x = shuffle($arr);
    foreach($arr as $y){
        echo $y;
    }
}
$coolString = "Hello";
echo "<br>", shuffle1($coolString);

#STRCASECOMP
function strcasecomp($string1, $string2){
    $resultString1 = strtolower($string1);
    $resultString2 = strtolower($string2);
    
    if($resultString1 == $resultString2){
        echo "They are the same !(case insensitive)";
    }else{
        echo "They are not the same !(case insensitive)";
    }
}
echo '<br>', strcasecomp("Bonjoursss", "bonjours");

#STRNCMP
function strcomp($string1, $string2){
    if($string1 == $string2){
        echo "They are the same !(case sensitive)";
    }else{
        echo "They are not the same!(case sensitive)";
    }
}
echo '<br>', strcomp("Bonjour", "bonjour");

#Reverse String
function reverseString($string){
    $arr = str_split($string);
    $newarray = array_reverse($arr);
    foreach($newarray as $y){
        echo $y;
    }
    

}
echo "<br>", reverseString("test");

?>