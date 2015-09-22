<html>
<h1>ISBN VALIDATOR</h1>

	<form action="homework2.php" method="post">
    	<input type="text" name="isbn" /><br />
    <input type="submit" name="submit" value="Validate!" />
</form>

<?php

if (isset($_POST['isbn'])) {
	$isbn = $_POST['isbn'];
	
	
		if (strlen($isbn)!= 10) {
	
			echo "Please enter a 10 digit ISBN";

		} else {
	
				isbnValidator($isbn);
				
				}
}





#######UGLY FUNCTION BELOW#################
function isbnValidator($isbn) {

if (is_numeric($isbn)) {
	

$validateNumber = (($isbn[0]*10)+($isbn[1]*9)+($isbn[2]*8)+($isbn[3]*7)+($isbn[4]*6)+($isbn[5]*5)+($isbn[6]*4)+($isbn[7]*3)+($isbn[8]*2)+($isbn[9]*1));	
$checksum = $validateNumber%11;

if ($checksum != 0) {
	echo ("<img src=http://ohtoptens.com/wp-content/uploads/2015/05/Grumpy-Cat-NO-1.jpg>");
		}
		else {
			echo ("<img src=http://www.catster.com/wp-content/uploads/2015/06/20130426-lil-bub-zen-yes.jpg>");
		}
} else {
	echo "Only numeric values please";
}
}

function formCleaner($isbn) {

	$isbn = trim($isbn);
	$isbn = preg_replace('/[^0-9]/','',$isbn);

}
?>
</div>

<div>

<?php  
#set random variable (confused about local/global)
$random = mt_rand(0,1);

echo "Flipping Coin One Time... <br><br>";

#if 1 say heads, or else say tails
if ($random == 1) {

	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg><br><br> ";

} else {

	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg><br><br> ";
}

#if 1 say heads, or else say tails. use for loop to repeat three times
echo "Flipping Coin Three Times... <br><br>";

for ($i = $random; $i < 4; $i++) {

$random = mt_rand(0,1);

	if ($random == 1) {

	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg> ";

} else {

	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg> ";
}
}
echo "<br><br>Flipping Coin Six Times... <br><br>";
#if 1 say heads, or else say tails. use for loop to repeat six times
 for ($i = $random; $i < 7; $i++) {

 	$random = mt_rand(0,1);

	if ($random == 1) {

	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg> ";

} else {

	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg> ";
}
}

echo "<br><br>Flipping Coin 9 Times... <br><br>";
#if 1 say heads, or else say tails. use for loop to repeat 9 times

 for ($i = $random; $i < 10; $i++) {

 	$random = mt_rand(0,1);

	if ($random == 1) {

	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg> ";

} else {

	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg> ";
}
}


echo "<br><br>Flipping Coin Until Twice In A Row... <br><br>";

 for ($i = $random; $i > 0; $i++) {

	if ($random == 1) {

	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg> ";
	
	break;

} else {

	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg> ";
	break;

}
}



#####ugly function below######

function coinToss($random) {

	$random = mt_rand(0,1);

}

?>
</div>
</html>