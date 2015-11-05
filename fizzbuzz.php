<?php
	for($setNum = 1 ; $setNum <= 100 ; $setNum ++){
		if($setNum % 3 == 0 || $setNum % 5 == 0 || $setNum % 7 == 0){
			if($setNum % 3 == 0){
				echo "Fizz!";
			}
			if($setNum % 5 == 0){
				echo "Buzz!";
			}
			if($setNum % 7 == 0){
				echo "Git!";
			}
			echo "<br />\n";
		} else {
			echo $setNum."<br />\n";
		}
	}
	
	
	
?>