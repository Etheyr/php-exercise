<?php

function gA ($year = "" , $mw = "") {

	if($year > 18 && $mw === "men") {

		echo "Vous êtes un homme et vous êtes majeur";

	} elseif ($year < 18 &&  $mw === "men") {

		echo "Vous êtes un homme et vous êtes mineur";

	} elseif ($year > 18 &&  $mw === "women") {

		echo "Vous êtes une femme et vous êtes majeur";

	} elseif ($year < 18 &&  $mw === "women") {

		echo "Vous êtes une femme et vous êtes majeur";

	}

}

echo gA(19,men);

?>