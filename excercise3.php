<?php

#TASK 1

if (date('m') == 8)
	echo "It's August, so it's still holiday.<br/>";
else {
	$month_name = date("F");
	echo "Not August, this is $month_name so I don't have any holidays.<br/>";
}

?>