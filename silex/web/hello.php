<?php
	echo "Hello World!<br/>";
	echo "The server time is " . time();
?>
<hr/>
<?php
	for ($i = 0; $i<=9; $i++) {
		echo "$i is ";
		if ($i % 2) {
			echo "odd<br/>";
		}
		else {
			echo "even<br/>";
		}
	}
	
?>
<hr/>
<?php
	$country = array ("Germany", "France", "Belgium");
	$capital = array ("Berlin", "Paris", "Brussels");
	for ($i = 0; $i<=2; $i++) {
		echo "The capital of $country[$i] is $capital[$i].<br/>";
	}
?>