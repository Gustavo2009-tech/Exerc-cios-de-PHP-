<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <h1>Exercicio 05</h1>
    <h2>//5. Leia um número de 1 a 7 e mostre o dia da semana;</h2>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Primeiro número: </label>
        <input type="number" name="number" id="number"/>
        <br>
        <button type="submit">Calcular
        <?php
            $num = $_POST['number'];
            $resultado = diaDaSemana ($num);
        ?>

        </button>
    </form>
    <h1>
        <?php
        echo "O dia da semana é: $resultado";
        ?>



</body>
</html>