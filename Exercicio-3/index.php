<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-3/style.css">
    <title>Exercicio-3</title>
</head>
<body>
    <div class="form">
     <strong> <h1 class=title> Exercício 3 </strong> <h1> 
        <h3>Entrar com nome, sexo e idade de uma
            pessoa. Se a pessoa for do sexo feminino e
            tiver menos que 25 anos, imprimir nome e a
            a mensagem: ACEITA. Caso contrário,
            imprimir nome e a mensagem: NÃO ACEITA.
        </h3>
        <br /> 
        <form id="formulario" action="/Exercicio-3/index.php" method="POST">
        <label for="text">Nome</label><br/>
        <input type="text" class= input name="nome" value="<?= $nome ?>" id="Nome"placeholder="Nome..."/><br />
        <div class="input-field"><br /></div>
        <label for="text">Sexo</label><br />      
        <input type="text" class= input name="sexo" value="<?= $sexo ?>" id="Sexo"  placeholder="Sexo..."/>
        <div class="input-field"><br /></div>
        <label for="number">Idade</label><br />  
        <input type="number" class=input name="idade" value="<?= $idade ?>" id="idade" placeholder="Idade..."/>
        <div class="underline"></div><br />
        <input type="submit"  class= "botao" name="Cadastrar" value="Cadastrar"/><br />
        

  <?php
    
     if(isset($_POST['nome']) && ($_POST['sexo']) && ($_POST['idade'])) {
                 
         $nome = $_POST['nome'];
         $sexo = $_POST['sexo'];
         $idade = $_POST['idade'];
 
     if ($sexo == "Feminino" && $idade <= 25) {
         echo "<div class='results'> $nome,Parabéns!Você foi aceita.</div>";
     } 
     
        else if ($sexo == "feminino" && $idade <= 25) {
        echo "<div class='results'> $nome, Parabéns!Você foi aceita.</div>";
        }
    
        else if ($sexo == "Feminino" && $idade >= 25) {
            echo "<div class='results'>$nome, Não aceita.</div>";
        }
    
        else if ($sexo == "feminino" && $idade >= 25) {
            echo "<div class='results'> $nome, Não aceita.</div>";
        }
    
        else if ($sexo == "masculino" && $idade >= 25) {
            echo "<div class='results'> $nome, Não aceito, projeto destinado a pessoas do sexo feminino.</div>";
        }
        else if ($sexo == "Masculino" && $idade >= 25) {
            echo "<div class='results'> $nome Não aceito, projeto destinado a pessoas do sexo feminino.</div>";
        }
    
        else if ($sexo == "masculino" && $idade <= 25) {
            echo "<div class='results'> $nome Não aceito,projeto destinado a pessoas do sexo feminino.</div>";
        }
        else if ($sexo == "Masculino" && $idade <= 25) {
            echo "<div class='results'> $nome Não aceito, projeto destinado a pessoas do sexo feminino .</div>";
        }
    
    }

 ?>
    </form>
    </div>
    
</body>
</html>