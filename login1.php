<?php 

$nome = $_POST['login'];

$senha = $_POST['senha'];



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Boas Vindas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="contaner">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div class="row">
		<div class="col"></div>
		<div class="col">
        <?php if($senha != 1234){ ?>
			<div class="card alert alert-danger">
				<div class="card-body">
					<div class="text-center">
						<img src="img/login.png" width="130px" class="img-fluidx">
					</div>
					<h3 class="text-center">Erro ao Digitar a Senha !</h3>
	<a href="javascript:history.back(-1)" class="btn btn-info">Tentar Novamente</a>					
				</div>
			</div>
<?php } else{ ?> 			
			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<div class="text-center">
						<img src="img/login.png" width="130px" class="img-fluidx">
					</div>
					<h3 class="text-center">Bem Vindo<?php echo $nome; ?> !</h3>
					</div>
			</div>
<?php } ?>
		</div>
		<div class="col"></div>
	</div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>