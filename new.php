<?php 

$x = 25;
$y = 10;
$z = $x+$y;  
echo $z;
echo "<br>";               //sum of digits

$v = 10;
$sum = 0;
for ($i=0; $i <= $v; $i++) { 
	$sum+=$i;
}
echo "Sum of digits:";    
echo "<br>";
echo $sum;
echo "<br>";               //sum of digits

$even = 45;
if ($even%2 == 0) {
	echo "This number is even";
} else {
	echo "This number is odd";      
}
echo "<br>";                         //even or odd

$f = 5;
$fact = 1;

for ($i=1; $i <= $f ; $i++) { 
	$fact*=$i;
	
}
echo $fact;
echo "<br>";                                        //factorial

$prime = 23;
$n = 0;
for ($i=2; $i <= $prime/2 ; $i++) { 
	if ($prime%$i == 0 ) {
		$n++;
		break;
	}
}
if ($n==0) {
	echo "This number is a prime number ";
} else {
	echo "This number is not a prime number";
}
echo "<br>";                                             //prime number
 
$base = 15;
$height = 20;
$area = $base*$height/2;
echo $area;
echo "<br>";                            //area of triangle

$length = 30;
$breadth = 20;
$areaRect = $length*$breadth;
echo $areaRect;
echo "<br>";                            //area of reectangle

$num = 1234;
$numRev = 0;
while ($num > 1) {
	$rem = $num%10;
	$numRev = ($numRev*10) + $rem;
	$num = $num / 10;
}
echo $numRev;
echo "<br>";                           //reversing a number

$numb = 121;
$numb2 = $numb;
$pal = 0;
while ($numb > 1) {
	$rev = $numb%10;
	$pal = ($pal*10) + $rev;
	$numb = $numb/10;
}
if ($pal == $numb2) {
	echo "This number is a palindrome";
} else {
	echo "This number is not a palindrome";
}
echo "<br>";                                    //palindrome number

$number = 153;
$number2 = $number;
$armNum = 0;
while ($number > 1) {
	$s = $number%10;
    $armNum = $armNum + $s*$s*$s;
    $number = $number/10;
}
if ($armNum == $number2) {
	echo "This number is an armstrong number";
} else {
	echo "This number is not an armstrong number ";
}
echo "<br>";                                              //armstrong number.



$first = 50;
$second = 100;
$third = $first;

$first = $second;

$second = $third;
echo $first;
echo "<br>";
echo $second;
echo "<br>";                                             //swapping two numbers with a third variable;

$firstNum = 200;
$secondNum = 250;    
$firstNum = $firstNum + $secondNum;
$secondNum = $firstNum - $secondNum;
$firstNum = $firstNum - $secondNum;
echo $firstNum;
echo "<br>";
echo $secondNum;     
echo "<br>";                                               //swapping two numbers without a third variable;      
 ?>
