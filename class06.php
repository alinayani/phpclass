a
// function declaration
function functionName() {
	//code to be executed;
	// echo,loops,if/else, anything!
    echo "declare n call";
}

//calling a function 
functionName();

<?php

// function declaration
function functionName() {
	//code to be executed;
	// echo,loops,if/else, anything!
    echo "declare n call";
}

//calling a function 
functionName();
?>

// local scope
$a = 5; // global scope 
function myTest() { 
	echo $a; // local scope
}
myTest();

<?php
// local scope
$a = 5; // global scope 
function myTest() { 
	echo $a; // local scope
} 
myTest();

?>


// global scope
$a = 15; $b = 10;
function myTest1(){
 	global $a, $b; 
	$b = $a + $b;
} 
myTest1();
echo $b;

<?php 
$a = 15; $b = 10;
function myTest1(){
 	global $a, $b; 
	$b = $a + $b;
} 
myTest1();
echo $b;
?>

$a = 15; $b = 10; 
function myTest2() { 
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b']; 
} 
myTest2(); 
echo $b; 

<?php

$a = 15; $b = 10; 
function myTest2() { 
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b']; 
} 
myTest2(); 
echo $b; 

?>


function add_2_numbers($num1=1, $num2=1){
	echo $total = $num1 + $num2;
}
add_2_numbers(5,5);
add_2_numbers(5);
add_2_numbers();

<?php

function add_2_numbers($num1=1, $num2=1){
	echo $total = $num1 + $num2;
}
add_2_numbers(5,5);
echo "<br>";
add_2_numbers(5);
echo "<br>";
add_2_numbers();

?>

function  sum ($value1, $value2) {
	$result = $value1 + $value2;
	return $result;
}
echo sum(5, 10);

<?php 

function  sum($value1, $value2){
	$result = $value1 + $value2;
	return $result;
}
echo sum(5, 10);

?>

function increment_value($y){ 
	$y++; 
	echo $y;
} 
$x = 1;
increment_value($x); // prints ‘2’
echo $x;
		
<?php
function increment_value($y){ 
	$y++; 
	echo $y;
} 
$x = 1;
increment_value($x); // prints ‘2’
echo "<br>".$x;
?>
		
		
function add_some_extra(&$string){
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;


<?php 
function add_some_extra(&$string){
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;


?>

function increment_value1(&$y){ 
		$y++; 
		echo $y;
 	} 
$x = 1;
increment_value1($x); // prints ‘2’
echo $x;
	
	
<?php

function increment_value1(&$y){ 
		$y++; 
		echo $y;
 	} 
$x = 1;
increment_value1($x); // prints ‘2’
echo "<br>".$x;
?>	
	
	
	
function sum1(int $num1, int $num2, int $num3) {
		return ($num1 + $num2 + $num3);
}
print(sum1(2, '3', 4.1));


<?php 

function sum1(int $num1, int $num2, int $num3) {
		return ($num1 + $num2 + $num3);
}
print(sum1(2, '3', 4.1));

?>

declare(strict_types=1);
   	function sum2(int $num1, int $num2, int $num3) {
      		return ($num1 + $num2 + $num3);
   	}
   	print(sum2(2, '3', 4.1));


<?php	
declare(strict_types=1);
   	function sum2(int $num1, int $num2, int $num3) {
      		return ($num1 + $num2 + $num3);
   	}
   	print(sum2(2, '3', 4.1));?>
	
function returnIntValue(int $value): int {
      		return $value;
   	}
   	print(returnIntValue(5));
	
	<?php
	
	function returnIntValue(int $value): int {
      		return $value;
   	}
   	print(returnIntValue(5));?>
	
	

function returnIntValue1(int $value): int {
      		return $value + 5.0;
   	}
   	print(returnIntValue1(5));

<?php

function returnIntValue1(int $value): int {
      		return $value + 5.0;
   	}
   	print(returnIntValue1(5));
	?>
	
	
	function factorial($number) {
		echo $number;
        if ($number < 2) {
			return 1;
		} else {
			return ($number * factorial($number - 1)); 
		} 			
	}
	factorial(5);	
	
	<?php
	
	function factorial($number) {
		echo $number."<br>";
        if ($number < 2) {
			return 1;
		} else {
			return ($number * factorial($number - 1)); 
		} 			
	}
	factorial(5);	
	?>




Course Outline:
https://drive.google.com/open?id=1ornBCpRWSrcjGpr81yDDnJYSnH4yecNU

Session 01:
https://drive.google.com/open?id=1pPov7roZvqb95Kjdt9V36hnbieoipmhq

Session 02:
https://drive.google.com/open?id=1YsLY2nOGoKEqdGxWngiEwzxsAp-9F_hF

Session 03:
https://drive.google.com/open?id=1uo9gD6IMKWc8X_8f4Y5VlMjYrVW1oAS7

Session 04:
https://drive.google.com/open?id=1Q1p9kFqVusftjP4gGijrao-s-rejYskK

Session 05:
https://drive.google.com/open?id=1iqxjPr1gX2iRGT3Dtf83YizMPjG76Av9

class practical file:
https://drive.google.com/open?id=1Kdgz1lYsCmbiheyzhEkDmPEXeBRelJUk

Session 06:
https://drive.google.com/open?id=1fQHN_ddbqui_Wmp0py3aYWpHc0u2I5-9

class 06:
https://drive.google.com/open?id=1MUm5tTqAkf18YsHh-bfvjbji84wh_Pci



https://www.elated.com/php-recursive-functions/

https://www.tutorialrepublic.com/codelab.php?topic=php&file=recursive-function
















6 * factorial( 5 )
{5 * factorial( 4 )
{4 * factorial( 3 )...
{3 * factorial( 2 )...
{2 * factorial( 1 )
{1 * factorial( 0 )}
}
}
}
}




6 * {5 * {4 * {3 * {2 * {1 * factorial( 0 )}	}	}	}	}
