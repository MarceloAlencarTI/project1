<?php

$tipo = 'divisão';
$num1 = rand(1, 5768);
$num2 = 7;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Atividade Link de função - <?php echo $tipo; ?></title>
</head>
<body>

	<h2>link de Função passando variavel via GET</h2>
<p>
	<a href="function_get.php?tipo=<?php echo $tipo; ?>&num1=<?php echo $num1; ?>&num2=<?php echo $num2; ?>">

		Cline para calcular a "<?php echo $tipo; ?>" de <?php echo $num1; ?> e <?php echo $num2; ?>.
		
	</a>
</p>
</body>
</html>