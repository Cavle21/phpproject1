
<?php include "dlindexer.css.php" ?>
<!---- radio buttons that show appropriate input types for different sources needs development----->

<form action = "dlindexer.php" method = "GET">
	<h1>Make a file and write the html for dlindexer to use</h1>
	<h4>Name</h4>
	<input type = "text" name = "anime">
	<h4>Amount of episodes on site</h4>
	<input type = "text" name = "amount"></br>
	<input type = "submit" name = "makesub">
</form>

<!---different sources have different inputs for their classes a javascript app can hide and show what is selected in the radio buttons --->

<form action="dlindexer.php" method="GET">
	<h1>Choose your anime</h1>
	<table>
		<tr><td>Youtube.com</td><td>AnimeHere</td><td>AnimeToon</td></tr>
			<tr align="center">
				<td><input type = "radio" name = "type" value = "youtube"></input></td>
				<td><input type = "radio" name = "type" value = "animehere"></input></td>
				<td><input type = "radio" name = "type" value = "animetoon"></input></td>
			</tr>
	</table>
	<h2>Provide Details</h2>
	<div id = "youtube" class = "">
		<table>
			<tr><td>Name:</td> <td><input type = "text" name = "name"></input></td></tr>
			<tr><td>Id:</td><td><input type = "text" name = "id"></input></td></tr>
		</table>
	</div>
	<input type = "submit" name = "findsub">
</form>

<?php
//include ("dlwriter.php");
include ("anime.class.php");

if(isset($_GET["type"])){
	$arr = $_GET;
		$show = choosesource::choosesources($arr);		
}
 
 
 /*else if (isset($_GET['anime'])){
		$anime = $_GET['anime'];
		$title = $_GET['anime'];
		$amount = $_GET['amount'];
		$show = new anime($anime, $amount, $title);
		$show->makefile();
		//makefile($anime, $amount);
};*/


//grabs contents of file chosen by user + .txt then assigns each url to a variable and encodes it onto the link tag

/*function listsources ($anime, $title) {
	$anime = preg_replace('/[\s]/', "-" , $anime);
	echo "<h1>" . $title . "</h1>";
	$resource = file($anime . ".txt");
	
		foreach ($resource as $source) {
			list($link) = explode(" ", $source);
			$string = urlencode($link);
			$name = htmlspecialchars($link);
			echo "<a href=http://www.tubeoffline.com/download.php?host=AnimeHere&retry=1&video=" . $string . ">" . $name . "</a></br></br>";
		};
	
};*/

?>

<script src="dlindexer.js"></script>

