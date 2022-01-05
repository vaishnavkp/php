<?php 
addFunction(12);

function addFunction($num){
	$sum = 0;
	for ($i=0; $i <= $num ; $i++) { 
		$sum = $sum + $i;
	}
	echo $sum;
}
echo "<br>";                                          //sum of digits

function evenOrOdd($numb){
	if ($numb%2 == 0) {
		echo "This number is an even number";
	} else {
		echo "This number is an odd number";
	}
}                             

evenOrOdd(100);
echo "<br>";                                          //odd or even          

function primeFunction($p) {
        $n = 0;
        for ($i=2; $i < $p; $i++) { 
        	if ($p%$i == 0) {
        		$n++;
        		break;
        	}
        }
        if ($n == 0) {
        	echo "This number is a prime number";
        } else {
        	echo "This number is not a prime number";
        }
}

primeFunction(13);
echo "<br>";                                        //prime number

function factFunction($x) {
	$sum = 1;
	for ($i=1; $i <=$x ; $i++) { 
		$sum = $sum*$i;
	}
	echo $sum;
}
factFunction(5);
echo "<br>";                                        //factorial


function armstrong($a) {
	$rem = 0;
	$arm = $a;
	while ($a > 0) {
			$rev = $a%10;
	        $rem = $rem + $rev*$rev*$rev;
	        $a = $a/10;
	}

	if ($rem == $arm) {
		echo "This number is an armstrong number";
	} else {
		echo "This number is not an armstrong number";
	}
}
armstrong(407);
echo "<br>";                                               //armstrong number

function areaOfTriangle($base,$height) {
	$area = $base * $height/2;
	echo $area;
}
areaOfTriangle(10,30);
echo "<br>";                                             //area of a triangle

function areaOfRectangle($l,$b) {
	$areaR = $l*$b;
	echo $areaR;
}
areaOfRectangle(8,12);
echo "<br>";                                              //area of rectangle


function numswap1($first,$second) {
	$third = $first;
	$first = $second;
	$second = $third;
	echo $first;
	echo "<br>";
	echo $second;
}
numSwap1(80,200);
echo "<br>";                                             //swapping number 1


function numSwap2($f,$s) {
	$f = $f+$s;
	$s = $f-$s;
	$f = $f-$s;
	echo $f;
	echo "<br>";
	echo $s;
}
numSwap2(70,90);
echo "<br>";                                            //swapping number 2


function revFunction($r) {
	$R = 0;
      while ($r > 1) {
      	$rev = $r%10;
      
      	$R = ($R*10) + $rev;
      	$r = $r / 10;
      }
      echo $R;
}
revFunction(12345);
echo "<br>";                                              //reversing a number
  
function palFunction($pal) {
       $pal2 = $pal;
       $pal3 = 0;
       while ($pal > 1) {
       $rev2 = $pal%10;
       $pal3 = ($pal3*10) + $rev2;
       $pal = $pal/10;
       }
       if ($pal3 == $pal2) {
       	echo "This number is a palindrome number";
       } else {
       	echo "This number is not a palindrom";
       }
}
palFunction(141);
echo "<br>";







 ?>