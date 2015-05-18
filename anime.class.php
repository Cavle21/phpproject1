<?php

class anime 
{
	public $name;
	public $amount;
	public $title;
	
	function __construct ($name, $amount, $title) {
		$this->name = $name;
		$this->amount = $amount;
		$this->title = $title;
	}
	
	public function listsources (){
		$anime = $this->name;
		$title = $this->title;
		
		
		$anime = preg_replace('/[\s]/', "-" , $anime);
		echo "<h1>" . $title . "</h1>";
		$resource = file($anime . ".txt");
	
		foreach ($resource as $source) {
			list($link) = explode(" ", $source);
			$string = urlencode($link);
			$name = htmlspecialchars($link);
			echo "<a href=http://www.tubeoffline.com/download.php?host=AnimeHere&retry=1&video=" . $string . ">" . $name . "</a></br></br>";
		};
	}
	
	public function makefile (){
		$anime = $this->name;
		$amount = $this->amount;
		
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
}
