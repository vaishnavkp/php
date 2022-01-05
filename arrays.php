<?php 
echo "<h3>Ascending order</h3>";
$array = array(1, 6, 23, 10, 3, 2, 15,7);
$array2 = $array;
$array3 = $array;
$array4 = $array;
sort($array);
$length = count($array);

for ($i=0; $i < $length; $i++) { 
	echo $array[$i];
	echo "<br>";
}

for ($i=0; $i < $length ; $i++) { 
	for ($j=0; $j < $length-1; $j++) {
	if ($array2[$j] > $array2[$j+1]) {
	 	$temp = $array2[$j+1];
		$array2[$j+1] = $array2[$j];
        $array2[$j] = $temp;
	 } 
		
	}
}

print_r($array2);
echo "<br>";
for ($i=0; $i < $length; $i++) { 
	echo $array2[$i];
	echo "<br>";
}
echo "<h3>Descending order</h3>";
print_r($array3);
rsort($array3);
echo "<br>";
for ($i=0; $i < $length; $i++) { 
	echo $array3[$i];
	echo "<br>";
}

for ($i=0; $i < $length; $i++) { 
	for ($j=0; $j < $length-1; $j++) { 
	if ($array4[$j] < $array4[$j+1]) {
		$desc = $array4[$j+1];
		$array4[$j+1] = $array4[$j];
		$array4[$j] = $desc;
	}
	}
}
print_r($array4);
echo "<br>";
for ($i=0; $i < $length ; $i++) { 
	echo $array4[$i];
	echo "<br>";
}













 ?>