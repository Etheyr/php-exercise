<?php

function number($number1 = "", $number2 = ""){

	if($number1 < $number2) {

		echo "Le premier nombre est plus petit";

	} elseif ($number1 > $number2) {

		echo "Le premier nombre est plus grand";

	} elseif ($number1 === $number2) {

		echo "Les deux nombres sont identiques";

	}


}
echo number(9,3);
?>
