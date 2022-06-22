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

     <form id="formulario" action="/Exercicio-4/index.php" method="post">
       <label for="number" >Número 1 </label> <br />
       <input type="number"  class= "box"   name="value1"  id="valor1"  placeholder="Digite um número..."/>
       <div class="underline"></div>

       <label for="number" >Número 2 </label> <br />
       <input type="number"  class = "box" name="value2"  id="valor2"  placeholder="Digite um número..."/>
       <div class="underline"></div>
      
       <label for="number" >Número 3 </label> <br />
       <input type="number"  class="box" name="value3"  id="valor3"  placeholder="Digite um número..."/>
       <div class="underline"></div>
      
      <br /><input type="submit" class= "button"name="enviar" value="Enviar" class="enviar"/>
     

      <?php 
        $num1 = "";
        $num2 = "";
        $num3 = "";	

        if(isset($_POST['value1']) && ($_POST['value2']) && ($_POST['value3'])) {

        $num1 = $_POST['value1'];
        $num2 = $_POST['value2'];
        $num3 = $_POST['value3'];

        if	   ($num2 > $num1 && $num1 > $num3) echo "<div class='results'>$num2 $num1 $num3</div>";
        elseif ($num3 > $num2 && $num2 > $num1) echo "<div class='results'>$num3 $num2 $num1</div>";
        elseif ($num1 > $num2 && $num2 > $num3) echo "<div class='results'>$num1 $num2 $num3</div>";
        elseif ($num2 > $num1 && $num1 > $num3) echo "<div class='results'>$num2 $num1 $num3</div>";
        elseif ($num1 > $num3 && $num3 > $num2) echo "<div class='results'>$num1 $num3 $num2</div>";
        elseif ($num3 > $num1 && $num1 > $num2) echo "<div class='results'>$num3 $num1 $num2</div>";
        elseif ($num3 > $num2 && $num2 > $num1) echo "<div class='results'>$num3 $num2 $num1</div>";
        elseif ($num3 > $num1 && $num1 > $num2) echo "<div class='results'>$num3 $num1 $num2</div>";
        elseif ($num2 > $num3 && $num3 > $num1) echo "<div class='results'>$num2 $num3 $num1</div>";
		
    }


     ?>

     </form>
   
    </div>
    
</body>
</html>
