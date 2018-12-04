<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <h1>
     	<?php

     	 $nome = "Geovane";

     	 $idade = "28";

     	 $cidade = "rocinha";


          echo $nome; //esse é um comentário
          /*
          esse comentário é de 
          várias linhas de texto e pode aumentar
          */
          #outro tipo de comentário

             ?>
     </h1>
<br>
<br>

<h3>
	<?php
     	 $idade = "28";
     	 $cidade = "Itapoã";
          echo "A idade do ".$nome." é de ".$idade." anos e ele mora em ".$cidade;

	?>
<br>
<br>
	<?php
    $nascimento = '10/02/1998';
    $sobrenome = 'Fonseca da Silva';
	?>

	<p><?php echo $nome ?></p>
	<p><?php echo $sobrenome ?></p>
	<p><?php echo $nascimento  ?></p>

</h3>

</body>
</html>