<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-2/style.css">
    <title>Exercicio-2</title>
</head>
<body>
<fieldset id= "box">
    
    <div> <strong><h1 id="titulo"> Exercício 2 </strong><h1>  </div> </br>
  
  <p><id="text"><h2 id="text">Entrar com um número e o algoritimo informará se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.</h2></p></br>

  <form id="formulario" action="/Exercicio-2/index.php" method="post">
      <div class="input-field">
         <h3> <p><label for="number">Número:</label></p></h3>
          <input type="number" name="value" value="<?= $num ?>" id="valor1" placeholder="Escolha um valor..."/>
          <div class="underline"></div>
        </div>
    <br><p> <h3> <input type="submit" name="enviar" value="Enviar"/></p> </br>
     
     <?php

if(isset($_POST['value']) ){
$number = $_POST['value'];

if ($number%10 == 0 && $number%5 == 0 && $number%2 == 0) echo "<div class='results'>O número escolhido $number, é divisível por 10, por 5 e por 2!</div>";
elseif ($number%5 == 0 && $number%2 == 0)  echo "<div class='results'>O número escolhido $number, é divisível por 5 e por 2.</div>";
elseif ($number%5 == 0 && $number%10 == 0)  echo "<div class='results'>O número escolhido $number, é divisível por 5 e por 10.</div>";
elseif ($number%10 == 0 && $number%2 == 0)  echo "<div class='results'>O número escolhido $number, é divisível por 10 e por 2.</div>";
elseif ($number%10 == 0)  echo "<div class='results'>O número escolhido: $number, é divisível por 10.</div>";
elseif ($number%5 == 0)  echo "<div class='results'>O número escolhido $number, é divisível por 5.</div>";
elseif ($number%2 == 0)  echo "<div class='results'>O número escolhido $number, é divisível por 2.</div>";
else echo "<div class='results'>O número escolhido $number,não é divisível por 10, nem por 5 e nem por 2.</div>";
}

?>

</fieldset>
</body>
</html>