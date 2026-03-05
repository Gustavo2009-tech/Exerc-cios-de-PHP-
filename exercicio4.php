<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <h1>Exercicio 04</h1>
    <h2> //3. Leia a idade e verifique se pode votar: >16 e < 18 facultativo; >=18 obrigatório;</h2>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Primeiro número: </label>
        <input type="number" name="idade" id="idade"/>
        <br>
        <button type="submit">Calcular
        <?php
            $idade = $_POST['idade'];
            $resultado = podeVotar($idade);
        ?>

        </button>
    </form>
    <h1>
        <?php


        ?>



</body>
</html>