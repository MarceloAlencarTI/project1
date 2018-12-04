<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
     	 
     	 //$cor = array();

     	 $cor = [];

     	 $cor[2] = 'Laranjado';
     	 $cor[0] = 'Verde';
     	 $cor[1] = 'Vermelho';
     	 $cor['nova_cor'] = 'Aquamarine';

     	 list($cor2, $cor0, $cor1, $cor_nova_cor) = $cor;
     	 

	?>
<br>
<br>


	<p><?php var_dump($cor); ?></p> <!-- O var_dump, Mostrar a estrutura de todos os elementos dentro da vareavel -->
	<p><?php print_r($cor); ?></p>   <!-- O print_r, Mostrar todos os elementos dentro da vareavel -->
	<p><?php echo $cor['3']; ?></p>	  <!-- O $cor[0], Ele invoca o elemento desejado dentro da vareavel -->
	<p><?php echo $cor2; ?></p>	  <!-- O $cor[0], Ele invoca o elemento desejado dentro da vareavel -->

</body>
</html>