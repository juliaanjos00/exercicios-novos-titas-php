<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Exercicio-8</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/Exercicio-8/style.css">
</head>
<body>

  <div class="form">
<h2>Exercício 8</h2>

    <p><br /> Adicione um número que o algoritmos vai ler e mostrar todos os número de 1 até ele e o seu produto.<br /></p>

    <br />

    <form id="formulario" action="/Exercicio-8/index.php" method="post">
            <label for="number">Número</label><br />
            <input type="number" name="number" value="<?= $num ?>" id="number" autocomplete="off" placeholder="Digite um numero..."/>
            <div class="underline"></div>
            <input type="submit" class="button" name="enviar" value="Enviar" class="enviar"/>	
   
   
   <?php
           
           if(isset($_POST['number'])) {
                            
            $num= $_POST['number'];

            for ($n=1; $a <= $num; $n++) 

                echo "<div class='results'>$n<div>" . "";

        }
                        





   ?>
   
   
   
   
   
   
   
   
   
          </form>
                        
   <div>
</body>
</html>