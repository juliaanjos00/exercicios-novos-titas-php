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
        <input type="text" class= input name="value1" value="<?= $nome ?>" id="Nome"placeholder="Name..."/><br />
        <div class="input-field"><br /></div>
        <label for="text">Sexo</label><br />      
        <input type="text" class= input name="value2" value="<?= $sexo ?>" id="Sexo"  placeholder="Sexo..."/>
        <div class="input-field"><br /></div>
        <label for="number">Idade</label><br />  
        <input type="number" class=input name="value3" value="<?= $idade ?>" id="idade" placeholder="Idade..."/>
        <div class="underline"></div><br />
        <button><input type="submit"  class= "botao" name="Cadastrar" value="Cadastrar"/><button>
        </form>
    </div>

</body>
</html>