<?php
#TASK 1

if (date('m') == 8)
	echo "It's August, so it's still holiday.<br/>";
else {
	$month_name = date("F");
	echo "Not August, this is $month_name so I don't have any holidays.<br/>";
}
?>



<?php
#TASK 2

$color = "red";

if ($color == "red" || $color == "#ff0000")
	echo "<br>"."The color is <span style='color: $color'>red</span>.<br/>";
else
	echo "The color is not red.<br/>";
?>


<?php
#TASK 3

$percentage = $_POST["percentage"];
$grade = "Please enter percentage";

if (isset($_POST["percentage"]))
	if ($percentage > 80) $grade = "Excellent";
	else if ($percentage > 70) $grade = "Great";
	else if ($percentage > 60) $grade = "Good";
	else if ($percentage > 50) $grade = "Pass";
	else $grade = "Fail";
?>
<br>
<form action="exercise3.php" method="post">
    <label title="Your percentage">
        <input type="number" name="percentage" value=<?php if (isset($_POST["percentage"])) echo $_POST["percentage"] ?>>
    </label>
    <input type="submit" value="Check">
</form>

<?php
echo "Your grade is: $grade";
?>





