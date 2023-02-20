<?php

/*
................................................................................
1.Write a PHP function to sort an array of strings
by their length, in ascending order. (Hint: You can
use the usort() function to define a custom sorting
function.
*/


echo "Ans No 1.............";

echo "\n";


$names = [ 'Mainul', 'Hasan',  'khan' ];

// usort --sort an array of strings by their length, in ascending order

usort($names, function($a, $b) {
    return strlen($a) <=> strlen($b);
});
print_r($names);

// usort --sort an array of strings by their length, in descending order

// usort($names, function($a, $b) {
//     return strlen($b) <=> strlen($a);
// });
// print_r($names);
echo "\n";



/*
................................................................................
2.Write a PHP function to concatenate two strings,
but with the second string starting from the end of
the first string.
*/
echo "Ans No 2.............";
echo "\n";


$data3 = "Student name is";
$data4 = "Komol Hassan.";

function concatenateStr($data1,$data2){
$result =""; 
$result = join( ' ', [$data1, $data2] );
//alternative
// $result = implode(' ', array($data1, $data2));
return $result;
}
print_r(concatenateStr($data3,$data4));
echo "\n";

/*
................................................................................
3.Write a PHP function to remove the first and last
 element from an array and return the remaining 
 elements as a new array.
*/
echo "Ans No 3.............";
echo "\n";


$studentName = array('jamal', 'kamal', 'anwar', 'kalam', 'jamil');

function removeElement($array){
//to remove the first and last element from an array
$newarray = array_slice($array, 1, -1);
return $newarray;
}
print_r(removeElement($studentName));
echo "\n";


/*
................................................................................
4.Write a PHP function to check if a 
string contains only letters and whitespace
*/
echo "Ans No 4.............";
echo "\n";
  
$strings = array(
    'GFG',
    'GFG space',
    '@@##-- /',
    '789543',
    '\n',
    "\n"
);
// Checking above given strings 
// by used of ctype_alpha() function .

function check($strings){
foreach ($strings as $test) {
      
    if (preg_match('~^[\p{L}\p{N}\s]+$~uD', $test))
        echo "Yes\n";
    else
        echo "No\n";
      
}
}
print_r(check($strings));
echo "\n";



/*
................................................................................
5.Write a PHP function to find the second
largest number in an array of numbers. 
*/
echo "Ans No 5.............";
echo "\n";	



$arr = array(70, 4, 8, 10, 14, 9, 7, 6, 5, 3, 2, 35);
function findSecondMax(array $arr) {
    
    //If array is empty then return
    if(empty($arr)) {
        return;
    }
    
    /*
     * Initialize max and second max with negative value
     */
    $max = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;
    
    //Traverse an array
    foreach($arr as $number) {
        // //If it's greater than the value of max
        if($number > $max) { 
            // $secondMax = $max;
            $max = $number;
        }
    
        // //If array number is greater than secondMax and less than max
        if($number > $secondMax && $number < $max) {
            $secondMax = $number;
        }
    }
    
    return $secondMax;
}
 
$second_maximum = findSecondMax($arr);
echo "Second Highest Element is ".$second_maximum;
echo "\n";