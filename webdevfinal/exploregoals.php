<?php  
include_once 'includes/header.php';
require_once 'includes/login.php';
?>
		<div id="menu">
			<ul>
				<li><a href="working.php" accesskey="1" title="">Home</a></li>
				<li class="active"><a href="exploregoals.php" accesskey="2" title="">Search Goals</a></li>
				<li><a href="explorematches.php" accesskey="3" title="">Explore Matches</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Seach Arsenal Goals</strong></h2>
		</div>
		<p>Use the search form below to find Arsenal goals from the 2015-2016 Premier League season</p>
	</div>

<form method="get" action="">
	<fieldset>
		<legend>SEARCH GOALS</legend>
		<label for="name">PLAYER NAME:</label>
		<select name="name"><br> 
			<?php

			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) die($conn->connect_error);

			$query = "SELECT DISTINCT(playerFullName), playerID FROM squad_list NATURAL JOIN goal_info ORDER BY playerFullName ASC";
			$result = $conn->query($query);
			if (!$result) die ("Database access failed: " . $conn->error);
			$rows = $result->num_rows;
			echo " <option value= 'any'> -- All Players -- </option>";
			while ($row = $result->fetch_assoc()) {
				$id = $row['playerID'];
			
			echo "<option value =".$id." >".$row['playerFullName']." </option>";

			}
			echo "</select>";
			

			$queryopponent = "SELECT teamName, teamID FROM opponent_list ORDER BY teamName ASC";
			$resultopponent = $conn->query($queryopponent);
			if (!$resultopponent) die ("Database access failed: " . $conn->error);
			$rows = $resultopponent->num_rows;
				echo "<label for='opponent'>Opponent:</label> ";
				echo "<select name='opponent'> <br>";
				echo " <option value='any'> -- All Opponents -- </option>";
				while ($row = $resultopponent->fetch_assoc()) {
				$teamid = $row['teamID'];
			
			echo "<option value =".$teamid." >".$row['teamName']." </option>";
			

				}
				echo "</select>"
?>		
		
		
		<label for="home_away">Home or Away:</label> 
			<input type="radio" name ="home_away" value ="any" checked="checked">All</input>
			<input type="radio" name="home_away" value="Home">Home</input>
			<input type="radio" name="home_away" value="Away">Away</input>
			
		
		<label for="goal_type">Type of Goal:</label>
			<input type="radio" name ="goal_type" value ="any" checked="checked" >All</input>	
			<input type="radio" name="goal_type" value="Shot">Shot</input>
			<input type="radio" name="goal_type" value="Header">Header</input>
			<input type="radio" name="goal_type" value="Volley">Volley</input>
			<input type="radio" name="goal_type" value="Bicycle Kick">Bicycle Kick</input>
			
		<label for="situation">Situation:</label>
			<input type="radio" name ="situation" value ="any" checked="checked" >Any</input>
			<input type="radio" name="situation" value="Open Play">Open Play</input>
			<input type="radio" name="situation" value="Free Kick">Free Kick</input>
			<input type="radio" name="situation" value="Corner Kick">Corner Kick</input>
			<input type="radio" name="situation" value="Penalty Kick">Penalty Kick</input>  
		  
		
		<br>
		<br>
		<input type="submit" name="submit">
	</fieldset>
</form>
<br><br><br>
<div id="results">
<?php 
	if (isset($_GET['name'])) {
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	

	$id = $_GET['name'];
	$opponent = $_GET["opponent"];
	$home_away = $_GET["home_away"];
	$goal_type = $_GET["goal_type"];
	$goal_situation = $_GET["situation"];

	$idSQL = " AND playerID = $id";
	$opponentSQL = " AND teamID = $opponent";
	$home_awaySQL = " AND home_away = '$home_away'";
	$goal_typeSQL = " AND goalType = '$goal_type'";
	$goal_situationSQL = " AND goalSituation = '$goal_situation'";

	if ($id == "any") {
		$idSQL = "";
	}
	if ($opponent == "any") {
		$opponentSQL = "";
	}
	if ($home_away == "any") {
		$home_awaySQL = "";
	}
	if ($goal_type == "any") {
		$goal_typeSQL = "";
	}
	if ($goal_situation == "any") {
		$goal_situationSQL = "";
	}
	





	$query = "SELECT * FROM goal_info NATURAL JOIN schedule_list NATURAL JOIN squad_list NATURAL JOIN opponent_list WHERE date_match != 'bacon' $idSQL $opponentSQL $home_awaySQL $goal_typeSQL $goal_situationSQL  ORDER BY goalID DESC";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;
	echo "<h1>Search Results: ".$rows." Goals Found!</h1><br><br>";
	if ($rows == 0) {
		echo "<h2>BUMMER! No goals were found in your search. Please broaden your search terms and try again</h2><br>";
		echo "<img src= 'http://i.giphy.com/PlmQPWZBpsH4c.gif'><br>";
	} else {

	while ($row = $result->fetch_assoc()) {
	echo "<h3>".$row['playerDisplayName']." ".$row["goalType"]." from ".$row['goalSituation']." against ".$row["teamNickName"]." at ".$row["stadiumName"]."</h3><br>";	
	echo "<iframe src='".$row["video_path"]."'frameborder='0' scrolling='no' style='width: 649px; height: 365.062px;'></iframe><br><br><br><br>";
		} 
	}

echo "<p><a href=\"exploregoals.php\"><h2>Search Again</h2></a></p>";
}
else {
	echo "";
}



?>

</div>


<?php  
include_once 'includes/footer.php'
?>
