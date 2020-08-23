<?php 
    
	$numdig=$_POST["numdig"];
    $numult=1; //último número
    $numpen=0; //penúltimo número
  
    echo "0 <br/>
		1 <br/>"; 

    for($c=1; $c<=$numdig-2; $c++){
        $numfinal = $numult + $numpen;
        echo $numfinal."<br/>";
        $numpen = $numult;
        $numult = $numfinal;
    } 
?>