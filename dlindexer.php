

<form action = "dlindexer.php" method = "GET">
	<h1>Make a file and write the html for dlindexer to use</h1>
	<h4>Name</h4>
	<input type = "text" name = "anime">
	<h4>Amount of episodes on site</h4>
	<input type = "text" name = "amount"></br>
	<input type = "submit" name = "makesub">
</form>


<form action="dlindexer.php" method="GET">
	<h1>Choose your anime</h1>
	<input type = "text" name = "file"></br>
	<input type = "submit" name = "findsub">
</form>

<?php
//include ("dlwriter.php");
include ("anime.class.php");
$title = "";
$anime = "";
$amount = 0;

if(isset($_GET["file"])){
		$anime = $_GET["file"];
		$amount = 0;
		$title = $_GET['file'];
		$show = new anime($anime, $amount, $title);
		$show->listsources();
		//listsources($anime, $title);
}else if (isset($_GET['anime'])){
		$anime = $_GET['anime'];
		$title = $_GET['anime'];
		$amount = $_GET['amount'];
		$show = new anime($anime, $amount, $title);
		$show->makefile();
		//makefile($anime, $amount);
};


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



