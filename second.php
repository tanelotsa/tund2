<?php

	$age = 5;
	if ($age < 18) {
		echo "alaealine";
		
	}else {
		echo "täisaeline";
	}
	

?>

<br>

<?php

	//for tsükkel for(1,2,3) [sisu]  $i = 0
	//(1, 1 kord kõige alguses		$i < $age
	// ,2, enne sisu iga kord		$i = $i+1
	// ,3) peale sisu iga kord
	
	for($i = 1; $i <= $age; $i = $i+1) {
		
		echo $i. "palju ";	
		
	}
	
	echo "õnne";

?>