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
                    <input type="text"  placeholder= "digite seu nome..." id="value1"/><br />
                    
                   <br /> <label for= "text">Livro Escolhido</label><br />
                    <input type="text"  placeholder="livro..." id="value2"/><br /> 

                    <label for="text">Professor(a)/Aluno(a)</label><br />
                    <input type="text" name="value3" id="value3" autocomplete="off" placeholder="..."/>
                    <div class="underline"></div>
                        

                  <br /><div class="button"> <input type="submit" class= "button" name="enviar" value="Enviar"/></div> 

    </div>

    <?php

if(isset($_POST['value1']) && ($_POST['value2']) && $_POST['value3']) {

    $nome = $_POST['value1'];
    $livro = $_POST['value2'];
    $user = $_POST['value3'];

    switch($user){
        case "Professor(a)":
            echo "Professor:$nome </br> Livro:$livro </br> Prazo para devolução: 10 dias!";
            break;
        case "Aluno(a)":
            echo "Aluno: $nome </br> Livro: $livro </br> Prazo para devolução: 3 dias!";

    }
}






        ?>

</body>
</html>