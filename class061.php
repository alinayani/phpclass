
<?php
// function declaration
function functionName() {
	//code to be executed;
	// echo,loops,if/else, anything!
    echo "declare n call";
}

//calling a function 
//functionName();


function  sum ($value1, $value2) {
	
	$result = $value1 + $value2;
	return $result;
}


function abc($a){
	$a++;
	return $a;
}
$b = abc(5);
var_dump($b);
//$a = sum(5, 10);

?>