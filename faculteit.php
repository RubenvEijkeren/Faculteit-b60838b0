<<?php 
echo "Van welk getal wil je de faculteit weten?\n";

$getal = rtrim(fgets(STDIN));
$fac = $getal;
if (is_numeric($getal)){
	for ($i = 1; $i < $getal; $i++){
    	$fac = $fac * $i;
	}
	echo "De faculteit van " . $getal . " is " . $fac . "\n";
}
?>