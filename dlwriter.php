		
<?php

	function makefile ($anime, $amount){
	$anime = preg_replace('/[\s]/', "-" , $anime);
	echo $anime;
	
	$myfile = fopen($anime . ".txt", "w");
		for($i=1; $i<=$amount; $i++){
		$txt = "http://www.animehere.com/" . $anime . "-episode-" .$i . ".html\n";
			
		fwrite($myfile, $txt);
		
		}
	echo "$amount file lines of $anime have been written to $myfile";
	fclose($myfile);
	
	}

?>
