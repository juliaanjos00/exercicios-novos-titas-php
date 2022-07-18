<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-7/style.css">
    <title>Exercicio 7</title>
</head>
<body>
     <div class='form'>
        <h2> Exercício 7 </h2>
         <h3> A biblioteca de uma universidade deseja fazer
                um algoritmo que leia o nome do livro que
                será emprestado, o tipo de usuário (professor
                ou aluno) e possa imprimir um recibo
                conforme mostrado a seguir. Considerar que
                o professor tem 10 dias para devolver o livro
                o aluno somente 3 dias.</h3>

                <form id=campo id="formulario" action="/Exercicio-7/index.php" method="post"><br />
                    <label for= "text">Nome</label><br />
                    <input type="text"  placeholder= "digite seu nome..."name="nome" id="nome"/><br />
                    
                   <br /> <label for= "text">Livro Escolhido</label><br />
                    <input type="text"  placeholder="livro..." name= "livro" id="livro"/><br /> 

                    <label for="text">Professor(a)/Aluno(a)</label><br />
                    <input type="text" name="usuario" id="usuario" autocomplete="off" placeholder="..."/>
                    <div class="underline"></div>
                        

                  <br /><div class="button"> <input type="submit" class= "button" name="enviar" value="Enviar"/></div> 

    </div>

    <?php

if(isset($_POST['nome']) && ($_POST['livro']) && $_POST['usuario']) {

    $nome = $_POST['nome'];
    $livro = $_POST['livro'];
    $user = $_POST['usuario'];

    if ($user === "Professor(a)"){
    
        echo "<div class='results'>Professor(a) $nome 10 dias para devolução do$livro</div>";

    
      
    } elseif ($user === "Aluno(a)") {

        echo "<div class='results'>Aluno(a) $nome.  3 dias para devolução do  $livro</div>";

  
    }

}
    


        ?>

</body>
</html>