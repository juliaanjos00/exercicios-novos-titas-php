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
            
            <h3>
                 A biblioteca de uma universidade deseja fazer
                    um algoritmo que leia o nome do livro que
                    será emprestado, o tipo de usuário (professor
                    ou aluno) e possa imprimir um recibo
                    conforme mostrado a seguir. Considerar que
                    o professor tem 10 dias para devolver o livro
                    o aluno somente 3 dias.
                </h3>

                <form id=campo id="formulario" action="/Exercicio-7/index.php" method="post">
                    <label for= "text">Nome</label><br />
                    <input type="text"  placeholder= "digite seu nome..." name="nome" id="nome">
                    
                     <label for= "text">Livro Escolhido</label>
                    <input type="text"  placeholder="livro..." name="livro" id="livro"/>
        
                    <label for= "text">Pofessor(a) ou Aluno(a)</label>
                    <input type="text" name="usuario" id="usuario" autocomplete="off" placeholder="..."/>
                        

                    <div class="button"> <input type="submit" class= "button" name="enviar" value="Enviar"/></div> 

        </div>

</body>
</html>