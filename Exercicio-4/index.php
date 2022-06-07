<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-4/style.css">
    <title>Exercicio-4</title>
</head>

<body>
    <div class="form">
     <h2 id="title"> Exercício 4 </h2> <br />
     <p>
      <h3 id="text">  
      Entrar com 3 números e imprimi-los em
      ordem decrescente (suponha números
      diferentes).
      </h3> <br />
     </p>

     <form id="formulario" action="Exercicio-4/index.php" method="post">
       <label for="number" >Número 1 </label> <br />
       <input type="number" div class= "box"   name="value1" value="<?= $num1 ?>" id="valor1"  placeholder="Selecione um número..."/>
       <div class="underline"></div>

       <label for="number" >Número 2 </label> <br />
       <input type="number" div class = "box" name="value2" value="<?= $num2 ?>" id="valor2"  placeholder="Selecione um número..."/>
       <div class="underline"></div>
      
       <label for="number" >Número 3 </label> <br />
       <input type="number" div class="box" name="value3" value="<?= $num3 ?>" id="valor3"  placeholder="Selecione um número..."/>
       <div class="underline"></div>
      
      <br /><input type="submit" div class= "button"name="enviar" value="Enviar" class="enviar"/>
     
     </form>
   
    </div>
</body>
</html>