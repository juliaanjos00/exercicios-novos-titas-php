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
      <p> <h3> <input type="submit" name="enviar" value="Enviar"/> 	</p>
  
  </form>
</fieldset>
</body>
</html>