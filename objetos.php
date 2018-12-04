<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	     class Carro {
	     	function acelerar(){
	     		echo 'Vrum vrum vrum';
	     	}
	     }  

          $uno = new Carro();
          $uno->nome = 'Fiat Uno';

          $uno->acelerar();

          echo $uno->nome;
          
          echo 'br';

          $boolean = true;
                                           // ou $naoboolean = false
          $naoboolean = !boolean;          // será o inverso de $boolean


          echo $boolean.'<br >'.$naoboolean;



	?>
<br>
<br>
</body>
</html>