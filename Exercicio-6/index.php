<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-6/style.css">
    <title>Exercicio-6</title>
</head>
<body>
        <div class="form">
            <h2>Exercício 6</h2>

            <br /><h3> 
                Entre com um número inteiro entre 1 e 12 e o algoritimo vai mostrar um mês correspondente ao número
            </h3><br />

            <form id="formulario" action="/Exercicio-6/index.php" method="post">
                <div class="input-field">
                    <input type="number" name="value1" autocomplete="off" placeholder="Adicione um numero!"/>
                    <div class="underline"></div>
                </div>

                <br /><select name="lingua" action="#"> 
                    <option value='pt-br'>Português(Brasil)</option> 
                    <option value='en'> English </option>
                </select><br />

                <br /> <input type="submit" class="button" name="enviar" value="Enviar" class="enviar"/>

            </form> 
        </div> 
        
</body>
</html>