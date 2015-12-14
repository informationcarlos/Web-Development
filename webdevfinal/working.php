<?php  
include_once 'includes/header.php';
require_once 'includes/login.php';
?>
		<div id="menu">
			<ul>
				<li class="active"><a href="working.php" accesskey="1" title="">Home</a></li>
				<li><a href="exploregoals.php" accesskey="2" title="">Search Goals</a></li>
				<li><a href="explorematches.php" accesskey="3" title="">Explore Matches</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="wrapper">
	
	<div id="welcome" class="container">
    	
		<div class="title">
	 		 <h2>Welcome to <strong>THE GOAL ZONE</strong></h2>
		</div>
			<p>The Goal Zone is the final project for Pratt School of Information's Web Development course. The purpose of the site is to be an aggregator of goal videos and related information regarding Arsenal F.C. in the 2015-2016 Barclays Premier League competition.</p>
			<p>The Goal Zone will allow a user to search, discover, and browse goal videos based on a particular game, player, team opposition, or any combination thereof.</p>
	</div>
		
		<div id="three-column" class="container">

			<h1>Goal of of the day</h1><br><br>
<?php
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM goal_info NATURAL JOIN schedule_list NATURAL JOIN squad_list NATURAL JOIN opponent_list WHERE goalID >= 1+MOD(TO_DAYS(CURDATE()),(SELECT MAX(goalID) FROM goal_info)+1) LIMIT 1";
$result = $conn->query($query);
if (!$result) die ("Whoops how did that happen!?");
$rows = $result->num_rows;
	while ($row = $result->fetch_assoc()) {

	echo "<h3>".$row['playerDisplayName']." ".$row["goalType"]." against ".$row["teamNickName"]."</h3><br>";	
	echo "<iframe src='".$row["video_path"]."'frameborder='0' scrolling='no' style='width: 649px; height: 365.062px;'></iframe>";		
		}
	

?> 
	</div>


	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
			<div class="title">
				<h2>GOALS</h2>
			</div>
			<p>Search The Goal Zone's database of goal videos to find the exact goal you want to see.</p><br><br>
			<a href="exploregoals.php" class="button">Search Goals</a> </div>
		<div id="tbox2">
			<div class="title">
				<h2>MATCHES</h2>
			</div>
			<p>The Goal Zone keeps a chronological list of matches to allow you to explore goals by matches.</p>
			<a href="explorematches.php" class="button">Explore Matches</a> </div>
		<div id="tbox3">
			<div class="title">
				<h2>ARSENALIST</h2>
			</div>
			<p>Are you looking for videos of more than just Arsenal goals? Check out Arsenalist for all your other Arsenal video needs.</p>
			<a href="http://www.arsenalist.com" target = "blank" class="button">Go to Arsenalist</a> </div>
	</div>

<?php  
include_once 'includes/footer.php'
?>

