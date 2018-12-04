<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        $idade = 61;


        if($idade == 78)
        	echo 'Deu certo';

        else
        	echo'Alguma coisa';
    


        exit;






	    if($idade >= 60){
	    	echo 'Poh, idosão';
	    }     else if($idade >= 18){
	             	echo 'A idade nº '.$idade.' é de maior';
	    } else{
	    	echo 'A idade nº {$idade} é de menor';
	    }




	?>
<br>
<br>
</body>
</html>