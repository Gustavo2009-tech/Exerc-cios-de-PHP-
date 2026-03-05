<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <h1>Exercicio 08</h1>
    <h2>//8. Leia 5 números e calcule a média</h2>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Leia </label>
        <input type="number" name="numero" id="numero"/>
        <br>
        <button type="submit">Calcular
        <?php
            $media = $_POST['numero'];
            $resultado = calcularMedia ($primeiro, $segundo, $terceiro, $quarto, $quinto);
        ?>

        </button>
    </form>
    <h1>
        <?php
        echo "Validar senha: $resultado";
        ?>



</body>
</html>