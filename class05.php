<?php

echo "<pre>";
echo "topic: indexed array but giving indexes by ourself <br><br>";
echo "indexed array before adding a new element <br><br>";
echo '$confusion = array(10 => \'ten\', 11 => \'eleven\', 12 => \'twelve\'); <br/><br/>';
$confusion = array(10 => 'ten', 11 => 'eleven', 12 => 'twelve');
var_dump($confusion);
echo "<br><br>";
echo ' adding new element in above indexed array <br/><br/>';
echo '$confusion[] = \'new element\'; <br/><br/>';
$confusion[] = 'new element';
echo "adding a new element in an array without giving index by our self, php will give it index by default checking for the array last element index and adding +1 in it to get new index such as in above array before adding a new element the index was 12 and new element index is 13 see below <br><br>";
var_dump($confusion);

echo "<br><br>";

echo "topic: associative array and its keys <br/><br/>";
echo '$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"); <br/><br/>';
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
echo "below are the keys of an associative array <br/><br/>";
echo '$keys = array_keys($a1);<br/><br/>
var_dump($keys);<br/><br/>';
$keys = array_keys($a1);
var_dump($keys);

echo "topic: counting elements in an array<br><br>";
echo '$count = count($a1);<br><br>';
echo 'var_dump($count); <br><br> //4 <br/>';
$count = count($a1);
var_dump($count);

echo "<br><br>";
?>
// for loop for associative array
for($x=0; $x < $count; $x++){
 	echo "key is: ".$keys[$x]." , value is: ".$a1[$keys[$x]];
}
<?php 
for($x=0; $x < $count; $x++){
 	echo "key is: ".$keys[$x]." , value is: ".$a1[$keys[$x]]."<br>";
}
?>

//multi dimensional array
$array = array(array (
          'name' => 'Ellie',
          'password'=> 'tr89ial'
     ),
	array(
         'name' => 'greatGuy',
         'password'=> 'abc123'
     ),
	array (
         'name' => 'blogger',
         'password' => '23seventeen23'
     )
 );

$arrayLength = count($array);

// looping for multi dimensional array
for ($i = 0; $i<$arrayLength; $i++) {
	echo $i;	
	foreach ($array[$i] as $key => $value) {
		echo "key: " .$key .", value: ".$value;
    }
}

<?php
//multi dimensional array
$array = array(array (
          'name' => 'Ellie',
          'password'=> 'tr89ial'
     ),
	array(
         'name' => 'greatGuy',
         'password'=> 'abc123'
     ),
	array (
         'name' => 'blogger',
         'password' => '23seventeen23'
     )
 );

$arrayLength = count($array);

for ($i = 0; $i<$arrayLength; $i++) {
	echo $i . "<br>";	
	foreach ($array[$i] as $key => $value) {
		echo "key: " .$key .", value: ".$value."<br>";
    }
}
?>

// merge two arrays function

$a1=array("red","green");
$a2=array("blue","yellow");
$merged = array_merge($a1,$a2);
print_r($merged);

<?php

echo "<br><br>";

$a1=array("red","green");
$a2=array("blue","yellow");
$merged = array_merge($a1,$a2);
print_r($merged);
?>
merging when string keys are same

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

Array(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)

// get array keys function

$keys = array_keys($merged);
var_dump($keys);


<?php
$keys = array_keys($merged);
var_dump($keys);
?>

// check key exists in array function

$a = array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a)){
  echo "Key exists!";
}else{
  echo "Key does not exist!";
}

result:
<?php
$a = array("Volvo"=>"XC90","BMW"=>"X5");
//$b = array("v","b");
if (array_key_exists("Volvo",$a)){
//if (array_key_exists($b,$a)){
  echo "Key exists!";
}else{
  echo "Key does not exist!";
}
?>

// get array values function

$a = array("Name"=>"Peter", "Age"=>"41", "Country"=>"USA");
print_r(array_values($a));

<?php
$a = array("Name"=>"Peter", "Age"=>"41", "Country"=>"USA");
print_r(array_values($a));
?>

// get unique values from array function (preserve keys)

$a = array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

<?php
$a = array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));?>

// slice an array function

$a = array("red","green","blue","yellow","brown","black");
print_r(array_slice($a, 2, 3));

<?php 

$a = array("red","green","blue","yellow","brown","black");
print_r(array_slice($a, 2, 3)); ?>

preserve string keys by default but not index keys if you want to preserve index keys pass true as fourth argument such as

$input = array("a", "b", "c", "d", "e");
print_r(array_slice($input, 2, 2, true));

Array(
    [2] => c
    [3] => d
)

// array_diff Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of the other arrays. preserve keys

$a1 = array("a"=>"red", "b"=>"green", "c"=>"blue", "ss"=>"yellow");
$a2 = array("ss"=>"yellows", "e"=>"red","f"=>"green","g"=>"blue");

$result = array_diff($a1, $a2);
print_r($result);

<?php
$a1 = array("a"=>"red","b"=>"green","c"=>"blue", "ss"=>"yellow");
$a2 = array("ss"=>"yellows", "e"=>"red","f"=>"green","g"=>"blue");
$result = array_diff($a1, $a2);
print_r($result);?>

// search for a value in an array and return its corresponding key function

$a = array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
<?php 
$a = array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);?>


// reverse an array function not preserve index keys if you want to preserve it pass true as second argument

$a = array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a, true));
<?php 
$a = array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a, true));
?>

// prepend value in an array function

$a = array("red","green");
array_unshift($a,"blue");
print_r($a);

<?php 
$a = array("red","green");
array_unshift($a,"blue");
print_r($a);?>



The var_dump function displays structured information about variables/expressions including its type and value. Arrays are explored recursively with values indented to show structure.

echo and print

echo and print are more or less the same. They are both used to output strings to the screen.

echo has no return value while print has a return value of 1 so it can be used in expressions.
echo can take multiple parameters (although such usage is rare) while print can take one argument.

print_r() displays information about a variable (string, integer, float, array or objects) in a way that's readable by humans.
