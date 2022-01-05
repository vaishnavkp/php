<?php 

echo "<h3>Min and Max value</h3>";

$array = array(2,7,10,25,35,65,80);
$len = count($array);
print_r($array);
echo "<br>";
for ($i=0; $i < $len; $i++) { 
	echo $array[$i];
	echo "<br>";
}
echo "Min value of array = ".$array[0];
echo "<br>";
echo "Max value of array = ".$array[$len-1];
echo "<h3> Find duplicate values</h3>";

$numbers = array(4,6,2,1,0,1,4,5);
$input = $numbers;
print_r(array_unique($numbers));
echo "<br>";
$output = array();
foreach ($input as $inputValue) {
	foreach ($output as $outputValue) {
		if ($inputValue == $outputValue)  {
		    continue 2;
		}
	}
	$output[] = $inputValue;
}
print_r($output);


// $length = count($numbers);
// sort($numbers);
// print_r($numbers);
// echo "<br>";

// for ($i=0; $i < $length; $i++) { 
//         if ($numbers[$i] == $numbers[$i+1]) {
//         	$numbers[$i+1] = "";
//         }
    
// }
//     for ($i=0; $i < count($numbers); $i++) { 
//     	echo $numbers[$i];
//     }
// 	echo "<br>";



 ?>