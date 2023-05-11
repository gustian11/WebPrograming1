<?php  
	$a = 10;
	$b = 3;

	$tambah = $a + $b;
	$kurang = $a - $b;
	$kali = $a * $b;
	$Bagi = $a / $b;
	$sisa = $a % $b;
	$pangkat = pow($a, $b);

	echo "a= $a <br> b = $b<hr>" ;
	echo "$a+$b = $tambah<br>";
	echo "$a-$b = $kurang<br>";
	echo "$a*$b = $kali<br>";
	echo "$a/$b = $Bagi<br>";
	echo "$a%$b = $sisa<br>";
	echo "$a^$b = $pangkat<br>";

	//increment
	$a++;
	echo "a++ = $a <br>";
	#decrement
	$b--;
	echo "b-- = $b <hr>";

	/*
	Operator Perbandingan
	*/

	$samadengan = $a == $b;
	$tdksamadengan = $a != $b;
	$lbhsamadengan = $a >= $b;
	$lbhdari = $a > $b;
	$krgdariamadengan = $a <= $b;
	$krgdari = $a < $b;
	$negasisamadengan = !($samadengan);

	echo "$a == $b = $samadengan <br>";
	echo "$a != $b = $tdksamadengan <br>";
	echo "$a >= $b = $lbhsamadengan <br>";
	echo "$a > $b = $lbhdari <br>";
	echo "$a <= $b = $krgdariamadengan <br>";
	echo "$a < $b = $krgdari <br>";
	echo "!($a == $b) = $negasisamadengan <br>";
?>
<hr>
<table border="1">
	
</table>