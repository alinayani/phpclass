<?php

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$keys = array_keys($a1);
$count = count($a1);
var_dump($keys);
for($x=0; $x<$count; $x++){
  echo "key is: ".$keys[$x]." , value is: ".$a1[$keys[$x]]."<br>";
}

/*
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

/*
echo "<br><br>";

$a1=array("red","green");
$a2=array("blue","yellow");
$merged = array_merge($a1,$a2);
print_r($merged);

echo "<br><br>";

$keys = array_keys($merged);
var_dump($keys);


echo "<br><br>";


$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a)){
  echo "Key exists!";
}else{
  echo "Key does not exist!";
}

echo "<br><br>";

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));

echo "<br><br>";

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

echo "<br><br>";

$a=array("red","green","blue","yellow","brown","black");
print_r(array_slice($a,2,3));

echo "<br><br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

echo "<br><br>";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);

echo "<br><br>";

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));

echo "<br><br>";

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
*/
?>