<!DOCTYPE html>
<html>
<head>
	<title>CODE HOMEWORK 3</title>
	<style>
	table { color: black; 
			font-family:Georgia;
			border-color: black;
			border: 1px solid black;
			}
	</style>
</head>
<body>



<?php 
#create associate array with book elements as keys
$books = array(
		array('Title' => "PHP and MySQL Web Development", 'Author' => "Luke Welling", 'number of pages' => "144", 'type' => "Paperback", 'price' => 31.63 ),
		array('Title' => "Web Design with HTML, CSS, JavaScript and jQuery", 'Author' =>  "Jon Duckett", 'number of pages' =>  "135",  'type' => "Paperback", 'price' =>  41.23),
		array('Title' => "PHP Cookbook: Solutions & Examples for PHP Programmers", 'Author' =>  "David Sklar", 'number of pages' =>  "14",  'type' => "Paperback", 'price' =>  40.88),
		array('Title' => "JavaScript and JQuery: Interactive Front-End Web Development", 'Author' => "Jon Duckett", 'number of pages' =>  "251",  'type' => "Paperback", 'price' =>  22.09),
		array('Title' => "Modern PHP: New Features and Good Practices", 'Author' => "Josh Lockhart", 'number of pages' =>  "7",  'type' => "Paperback", 'price' =>  28.49),
		array('Title' => "Programming PHP", 'Author' => "Kevin Tatroe", 'number of pages' =>  "26",  'type' => "Paperback", 'price' =>  28.96),
);


#create a table and assign headers to the book elements
	echo "<table align= 'center' border='1' style='width:80%'>";
	echo "<caption> <h2>PHP Books</h2> </caption>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<<th>No. of Pages</th>
			<th>Type</th>
			<th>Price</th>
			</tr>";
#create a foreach loop to populate each row with a value from each book element
foreach ($books as $book => $book_info) {
	echo "<tr>";
	print "<td width= '60%'>".$books[$book]['Title']. " ";
	print "<td width= '15%'>".$books[$book]['Author']." ";
	print "<td width= '10%'>".$books[$book]['number of pages']." ";
	print "<td width= '15%'>".$books[$book]['type']." ";
	#add a </br> after price to make new row for each book info
	print "<td width= '10%'> $".$books[$book]['price']."<br>";
	echo "</tr>";

}	#create a row that spans across to the price column and title it total price
	echo "<tr>
			<td colspan='4' align = 'right'>TOTAL PRICE</td>";
	#use array_sum to calculate sum of the price key in the books array
	echo "<td>$".array_sum(array_column($books, 'price'))."</td>";
	echo "</tr>";
	


	echo "</table>";


?>

<br><br><br><br><br><br><br>
<hr>
<br><br><br><br><br><br><br>

<?php  
// #set random variable (confused about local/global)
// $random = mt_rand(0,1);

// echo "Flipping Coin One Time... <br><br>";

// #if 1 say heads, or else say tails
// if ($random == 1) {

// 	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50><br><br> ";

// } else {

// 	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50><br><br> ";
// }

// #if 1 say heads, or else say tails. use for loop to repeat three times
// echo "Flipping Coin Three Times... <br><br>";

// for ($i = 1; $i < 4; $i++) {

// $random = mt_rand(0,1);

// 	if ($random == 1) {

// 	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50 > ";

// } else {

// 	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50 >";
// }
// }
// echo "<br><br>Flipping Coin Six Times... <br><br>";
// #if 1 say heads, or else say tails. use for loop to repeat six times
//  for ($i = 1; $i < 7; $i++) {

//  	$random = mt_rand(0,1);

// 	if ($random == 1) {

// 	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50> ";

// } else {

// 	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50> ";
// }
// }

// echo "<br><br>Flipping Coin 9 Times... <br><br>";
// #if 1 say heads, or else say tails. use for loop to repeat 9 times

//  for ($i = 1; $i < 10; $i++) {

//  	$random = mt_rand(0,1);

// 	if ($random == 1) {

// 	echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50> ";

// } else {

// 	echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50> ";
// }
// }


// echo "<br><br>Flipping Coin Until Twice In A Row... <br><br>";

// $heads = 0;
// $flipNumbers = 0;
// while ($heads < 2) {
	
// 	$random = mt_rand(0,1);
// 	$flipNumbers++;

// 	if ($random == 1) {
		
// 		$heads++;
		
// 		echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50> ";
// 	}
// 	else {
// 		$heads = 0;
// 		echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50> ";
// 	}
// }
// echo "<br>it took ".$flipNumbers." flips! <br><img src=http://i.giphy.com/mYMIHvlfI4Xzq.gif>";

// echo "<br><br><br><br><br><br><br>
// 		<hr>
// 		<br><br><br><br><br><br><br>";

?>

<img src= http://i.imgur.com/Uugv8c6.jpg width=50% height=50%>
<h3>I'm a professional coin flipper. Just let me know how many heads in a row you want and I'll flip away until I get your result!</h3>
	<form action="codehw3.php" method="post">
    	<input type="number" name="number" min = "0"/><br>
    <input type="submit" name="submit" value="Flip!"/>
	</form>
<?php 

if (isset($_POST['number'])) {
	
	$number = $_POST['number'];
	
	if ($number > 10 ) {

		echo "Whoa buddy! I might be a professional coin flipper but I ain't got all day. Try aiming for 10 or less consecutive heads in a row.";
	} else {
	
		coinToss($number);
	}

} else {
	
	echo "";
}


#####ugly function below######

#create function called coin toss and assign argument as a variable
function coinToss($number) {
echo "<br><br>".$number." heads in a row? Guess I better start flipping...<br><br>";

#assign variable for heads and number of flips
$heads = 0;
$flipNumbers = 0; 

#while the heads variable is less than the argument number, do loop
while ($heads < $number) {
	
	#flipnumbers counter to store number of flips
	$random = mt_rand(0,1);
	$flipNumbers++;

	#if random generator produces 1, continue counting and print heads picture
	if ($random == 1) {
		
		$heads++;
		
		echo "<img src=http://www.tshirtvortex.net/wp-content/uploads/Giant-Cat-Head-1.jpg height= 50 width= 50> ";
	}
	#if random generator produces zero, assign heads variable back down to zero to restart count
	else {
		$heads = 0;
		echo "<img src=http://pet-happy.com/files/up/2013/02/cat-showss-his-butt.jpg height= 50 width= 50> ";
	}
}

if ($flipNumbers < 101) {

echo "<br>Can you believe it!? It only took ".$flipNumbers." flips! <br><br><img src=http://i.giphy.com/mYMIHvlfI4Xzq.gif>";

} else {

	echo "<br>Well that took a while! ".$flipNumbers." flips to finally get your result! <br><br><img src=http://i.giphy.com/mYMIHvlfI4Xzq.gif>";
	}
}
?>
</body>
</html>