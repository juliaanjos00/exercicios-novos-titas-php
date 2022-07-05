<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-5/style.css">
    <title>Exercicio-5</title>
</head>
<body>
       <div class="form">
        <h2 class=title> Exercício 5 <h2> 
        <h3>
         Ler 3 números, os possíveis lados de um
         triângulo, e imprimir a classificação de
         acordo com tamanho dos lados
        </h3>

        <form id=campo id="formulario" action="/Exercicio-5/index.php" method="post"><br />
         <label for= "number">Lado AB</label><br />
         <input type="number" name="value1" placeholder= "Adicione um número!" id="value1"/><br />
        
         <label for= "number">Lado BC </label><br />
         <input type="number" name="value2" placeholder="Adicione um número!" id="value2"/><br /> 
        
         <label for= "number">Lado CB</label><br />
         <input type="number" name="value3" placeholder="Adicione um número!" id="value3"/><br />

         <div class="button"> <input type="submit" class= "button" name="enviar" value="Enviar"/></div> 

         <?php

              if(isset($_POST['value1']) && ($_POST['value2']) && ($_POST['value3'])) {

                if ($AB==$BC && $BC==$CB) 
                  echo "<div class='results'>Triangulo Equilatero,classificado quando todos os ângulos tem a mesma medidas. </div>";
                
                elseif ($AB!=$CB && $AB!=$BC && $BC!=$CB)
                  echo "<div class='results'>Triangulo Escaleno,classificado quando os ângulos são diferentes. </div>";
                
                else
                  echo "<div class='results'>Triangulo Isosceles,classificado quando dois ângulos tem a mesma medida. </div>";
                
            
                }
          

            ?>
     
       </form>
     </div> 

</body>
</html>