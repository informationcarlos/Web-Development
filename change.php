<body bgcolor="#003366" text="white">
<img src=  "http://i.giphy.com/w2JmkbOHFoq8U.gif">
<h1> Meow Meow Here Is Your Change Meow</h1>
<p>Apologies in advance, but my little cat brain can't handle floating integers so I can only think of your initial change in cents! That means no decimals buddy!</p>
	With that in mind, please enter the amount of change I owe you:<br>

	<form action="change.php" method="post">
    	<input type="text" name="change" /><br />
    <input type="submit" name="submit" value="Go!" />
</form>

<?php 

if (isset($_POST['change'])) {
$change = $_POST['change'];
$dollars = 100;
$quarters = 25;
$dimes = 10;
$nickels = 5;
$pennies = 1;

 echo "<br>Well then, if I owe you ".$change." cents, I guess it makes sense to give you: <br><br>";


if ($change > 1) {
	echo ($change/$dollars-($change%$dollars/100))." Dollars<br>";
	$quartersLeftover = $change%$dollars;
	echo (int)($quartersLeftover/$quarters)." Quarters<br>";
	$dimesLeftover = $quartersLeftover%$quarters;
	echo (int) ($dimesLeftover/$dimes). " Dimes<br>";
	$nickelsLeftover = $dimesLeftover%$dimes;
	echo (int) ($nickelsLeftover/$nickels)." Nickels<br>";
	$penniesLeftover = $nickelsLeftover%$nickels;
	echo($penniesLeftover). " Pennies";
}	else {
	echo " ";
}
}

