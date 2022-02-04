<?php

#TASK 1

if (date('m') == 8)
	echo "It's August, so it's still holiday.<br/>";
else {
	$month_name = date("F");
	echo "Not August, this is $month_name so I don't have any holidays.<br/>";
}


#TASK 2

$color = "red";

if ($color == "red" || $color == "#ff0000")
	echo "<br>"."The color is <span style='color: $color'>red</span>.<br/>";
else
	echo "The color is not red.<br/>";


?>


