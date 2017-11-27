<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
       <meta charset="utf-8">  

       <meta http-equiv="X-UA-Compatible" content="IE=edge">  

       <meta name="viewport" content="width=device-width, initial-scale=1">  

       <title> Resultado do Calculo </title>
        <style>
			body {background: #c4c4c4;}
			fieldset {
				width: 250px;
				height: 120px;
				margin: 200px 0px 0px 450px;
				padding: 5px 5px 5px 5px;
				border: 2px groove;			
			
			};			
		</style>  
    </head>
    
    <body>
        <fieldset>
			<legend> Calculando</legend>
			<?php
				$valorA = $_POST["valorA"];
				$valorB = $_POST["valorB"];
				$opcao = $_POST["opcao"];
				if($opcao == "SOMA") {
					$resultado = $valorA + $valorB;
				}
				if($opcao == "Subtrair") {
					$resultado = $valorA - $valorB;
				}
				if($opcao == "Dividir") {
					$resultado = $valorA / $valorB;
				}
				if($opcao == "Multiplicar"){
					$resultado = $valorA * $valorB;
				}
			?>
			
			
		</fieldset>
    </body>
        
</html>