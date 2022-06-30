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

        <br />
        <h3> 
            Entre com um número inteiro entre 1 e 12 e o algoritimo vai mostrar um mês correspondente ao número
        </h3>
        <br />

            <form id="formulario" action="/Exercicio-6/index.php" method="post">
                <div class="input-field">
                    <input type="number" name="value1" autocomplete="off" placeholder="Adicione um numero!"/>
                    <div class="underline"></div>
                </div>

                <br /><select name="lingua" action="#"> 
                    <option value='pt-br'>Português(Brasil)</option> 
                    <option value='en'> English </option>
                </select><br />

        switch ($mes) {
            case 1:
                echo "<div class='results'>Janeiro<div>";
                break;
            case 2:
                echo "<div class='results'>Fevereiro<div>";
                break;
            case 3:
                echo "<div class='results'>Março<div>";
                break;
            case 4:
                echo "<div class='results'>Abril<div>";
                break;
            case 5:
                echo "<div class='results'>Maio<div>";
                break;
            case 6:
                echo "<div class='results'>Junho<div>";
                break;
            case 7:
                echo "<div class='results'>Julho<div>";
                break;
            case 8:
                echo "<div class='results'>Agosto<div>";
                break;
            case 9:
                echo "<div class='results'>Setembro<div>";
                break;
            case 10:
                echo "<div class='results'>Outubro<div>";
                break;
            case 11:
                echo "<div class='results'>Novembro<div>";
                break;
            case 12:
                echo "<div class='results'>Dezembro<div>";
                break;
            default:
                echo "<div class='results'>Digite somente números do 1 ao 12!<div>";
                break;
        }
    }

    ?>


     </form> 
    </div> 
        
</body>
</html>
