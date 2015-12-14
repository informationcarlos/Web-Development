<?php  
include_once 'includes/header.php';
require_once 'includes/login.php';
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
    	
<div class="title">
	  <h1>Explore Matches</h1>
		</div>
		<h2>See goals by matches</h2><br><br>
<?php
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM schedule_list NATURAL JOIN opponent_list ORDER BY weekID DESC";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<ul>";
while ($row = $result->fetch_assoc()) {
	echo "<a href=\"viewmatch.php?weekID=".$row["weekID"]."\"><h2><li>".$row["date_match"].":  "." Arsenal vs. ".$row["teamNickName"]." at ".$row["stadiumName"]."</li></h2></a>";
	echo "<br><br>";
}
echo "</ul>"
?>

<?php  
include_once 'includes/footer.php'
?>