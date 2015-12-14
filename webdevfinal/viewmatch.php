<?php  
include_once 'includes/header.php';
require_once 'includes/login.php';
require_once 'includes/functions.php';
?>
		<div id="menu">
			<ul>
				<li><a href="working.php" accesskey="1" title="">Home</a></li>
				<li><a href="exploregoals.php" accesskey="2" title="">Search Goals</a></li>
				<li class="active" ><a href="explorematches.php" accesskey="3" title="">Explore Matches</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	
	<div id="welcome" class="container">
<?php
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['weekID'])) {
	$id = sanitizeMySQL($conn, $_GET['weekID']);
	$query = "SELECT * FROM goal_info NATURAL JOIN schedule_list NATURAL JOIN squad_list NATURAL JOIN opponent_list WHERE weekID=$id  ORDER BY playerNumber";
	$result = $conn->query($query);
	if (!$result) die ("Whoops how did that happen!?");
	$rows = $result->num_rows;

	if ($rows == 0) {
		echo "<h2>BUMMER! ARSENAL DIDN'T SCORE IN THIS MATCH</h2><br>";
		echo "<img src= 'http://i.giphy.com/X6aRTbDhs9lS.gif'><br>";
	} else {
		$i=0;
		while ($row = $result->fetch_assoc()) {
	
			if ($i == 0) {
	echo "<div class='title'>";
	echo "<h2>".$row["weekName"].": Arsenal vs. ".$row["teamName"]." at ".$row["stadiumName"]."</h3>";
	echo "</div>";
	$i=1;
			}
		

	echo "<h3>".$row['playerDisplayName']." ".$row["goalType"]." against ".$row["teamNickName"]."</h3>";	
	echo "<iframe src='".$row["video_path"]."'frameborder='0' scrolling='no' style='width: 649px; height: 365.062px;'></iframe><br><br>";		
		
		}

	}
	echo "<p><a href=\"explorematches.php\"><h2>Return to Matches</h2></a></p>";
} else {
	echo "ERROR: DOES NOT COMPUTE";
}

?>  




<?php  
include_once 'includes/footer.php'
?>