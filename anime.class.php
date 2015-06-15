<?php

class choosesource {	
	
	public static function choosesources ($arr) {				
		foreach ($arr as $key=>$value){
			$$key = $value;
		};
		
		switch ($type) {
			case 'youtube':
				return new youtube($id, $name);
				break;
			case 'animehere':
				return new animehere;
				break;
			case 'animetoon':
				return new animetoon;
				break;
			default:
			echo "That source doesn't exist try again";
				break;
		}
	}
	
}

class show 
{	
	function __construct () {

	}
	
	public function listsources(){
		$id = $this->id;
		$name = $this->name;
		
		$show = preg_replace('/[\s]/', "-" , $show);
		echo "<h1>" . $name . "</h1>";
		$resource = file($name . ".txt");
	
		foreach ($resource as $source) {
			list($link) = explode(" ", $source);
			$string = urlencode($link);
			$name = htmlspecialchars($link);		
			echo "<a href=http://www.tubeoffline.com/download.php?host=AnimeHere&retry=1&video=>words</a></br></br>";
		};
	}
	
	public function makefile () {
		$anime = $this->name;
		$amount = $this->amount;
		
		$anime = preg_replace('/[\s]/', "-" , $anime);
		echo $anime;
	
		$myfile = fopen($anime . ".txt", "w");
		for($i=1; $i<=$amount; $i++){
		$txt = "http://www.animehere.com/" . $anime . "-" . $i . ".html\n";
			
		fwrite($myfile, $txt);
		
		}
		
		//removed -episode from $txt
		
	echo "$amount file lines of $anime have been written to $myfile";
	fclose($myfile);
	}
}


class youtube extends show 
{
	public $id;
	public $name;
	
	function __construct ($id, $name) {
		$this->id = $id;
		$this->name = $name;
		$this->listsources();
	}
	
	public function listsources (){
		$id = $this->id;
		$name = $this->name;

		//youtube doesn't require the special formatting, require user to input title and youtube id, $name->$show will have special id
		
		echo "<h1>" . $name . "</h1>";
		
			echo "<a href=http://www.tubeoffline.com/downloadFrom.php?host=YouTube&video=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D" . 
			$id .  ">" 	.
			$name. '</a>';
	}
	
	//youtube doesn't make a file
	
	public function makefile (){

	}
}





















