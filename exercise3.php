<!--- 
my web-dev repository: https://github.com/DenisFedulov/DenisFedulov_wp
project website repository: https://github.com/PopekD/Sports-Club
project pages link: https://popekd.github.io/Sports-Club/
-->

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
        <input type="number" name="percentage" placeholder="Enter your percentage" ?>
    </label>
    <input type="submit" value="Check">
</form>

<?php
echo "Your grade is: $grade<br/><br/>";
?>



<?php
#TASK 4 

$eligible = "Please type your age";
if (isset($_POST["age"])) {
	if ($_POST["age"] >= 18)
		$eligible = "Eligible";
	else
		$eligible = "Not eligible";
}
?>


<form action="exercise3.php" method="post">
    <label title="Name">
        <input
                name="name"
                placeholder="Enter your name"
                type="text"
                required>
    </label>
    &nbsp;
    <label title="Age">
        <input type="number"
               name="age"
               placeholder="Enter your age"
               min="0"
               max="119"
               required>
    </label>
    &nbsp;
    <input type="submit" value="Check">
</form>

<span>Eligibility for voting: </span>
    <?php echo $eligible ?>.<br/><br/>



<?php
#TASK 5

for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br/>";
}
?>
<br/>



<?php
#TASK 6

for ($i = 1; $i <= 8; $i++) {
	echo str_repeat("*", $i) . "<br/>";
}
?>







