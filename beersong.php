<h1> <img src= 'http://i164.photobucket.com/albums/u8/hemi1hemi/DRINKS/glitter-beer.gif'>BEER SONG<img src= 'http://i164.photobucket.com/albums/u8/hemi1hemi/DRINKS/glitter-beer.gif'> </h1>

<?php  
for ($count=99; $count>=0; --$count) {
	if ($count == 0) 
		echo "<p> No more beer! This terrible song is <strong><em>FINALLY</em></strong> over...lets celebrate with another beer!</p><img src= 'http://i.giphy.com/SgaZMaG4VPewg.gif'>";
	elseif ($count == 1 )
		echo "<p> 1 bottle of beer on the wall, 1 bottle of beer.</p> <p> Take one down pass it around, no more bottles of beer on the wall!</p>";
	else echo $count." bottles of beer on the wall, " .$count. " bottles of beer. <p>Take one down and pass it around, ".($count-1)." bottles of beer on the wall.</p> ";

}
?>

