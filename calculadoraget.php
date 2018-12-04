<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora usando metodo GET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	
<h1>Calculadora</h1>
<div class="row">
	<form method="get" action="function_get.php">
		<div class="form-group">
			<label for="tipo">Tipo:</label>
			<select name="tipo" class="form-group">
				<option value="" >.::Escolha a opção::.</option>
				<option value="Soma" >Soma</option>
				<option value="Subtração" >Subtração</option>
				<option value="Multiplicação" >Multiplicação</option>
				<option value="Divisão" >Divisão</option>
			</select>
		</div>
		<div class="form-group">
			<label for="num1">Número 1:</label>
			<input type="text" name="num1" class="form-control">
		</div>
		<div class="form-group">
			<label for="num2">Número 2:</label>
			<input type="text" name="num2" class="form-control">
		</div>
		<input type="submitr" value="Calcular" class="btn btn-primary">		
	</form>
</div>

</div>

</body>
</html>