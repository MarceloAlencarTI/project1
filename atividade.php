<?php

function calculadora($tipo, $num1, $num2){

  switch ($tipo) {
  	case 'soma':
  		$resultado = "A $tipo é igual a <strong>".($num1 + $num2)."</strong>";
  		break;

  	case 'subtração':
  		$resultado = "A $tipo é igual a <strong>".($num1 - $num2)."</strong>";	
  		break;

  	case 'multiplicação':
  		$resultado = "A $tipo é igual a <strong>".($num1 * $num2)."</strong>";	
  		break;

  	case 'divisão':
  		$resultado = "A $tipo é igual a <strong>".($num1 / $num2)."</strong>";
  		break;
  	
  	default:
  		$resultado = 'Tipo passado não é válido: Informe: soma, subt, div, mult';
  		break;
  }

echo $resultado;

echo '<br> <br>';

echo 'A opção que você escolheu foi de '.$tipo.' para efetuar a operação dos 2 números !';

}

echo calculadora('soma', 22, 32);




function caculadoraIf($tipo, $num1, $num2){
	if($tipo == 'soma'){
		$resultado = "A $tipo é igual a <strong>".($num1 + $num2)."</strong>";
	} else if($tipo == 'subtração'){
				$resultado = "A $tipo é igual a <strong>".($num1 - $num2)."</strong>";
	} else if($tipo == 'multiplicação'){
				$resultado = "A $tipo é igual a <strong>".($num1 * $num2)."</strong>";		
	} else if($tipo == 'divisão'){
				$resultado = "A $tipo é igual a <strong>".($num1 / $num2)."</strong>";
    } else {
    	$resultado = 'Tipo passado não é válido: Informe: soma, subt, div, mult'; 
    }
    return $resultado;
}

echo '<br>';
echo '<br>';

echo caculadoraIf('soma', 6545, 88);

echo '<br>';
echo '<br>';

echo caculadoraIf('subtração', 6545, 88);



?>