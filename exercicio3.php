<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <?php include('funcoes.php'); ?> <!--Chamar os Métodos-->
    <form method="POST">
        <label>Primeiro número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero"/>
        <br><br>
        <label> Segundo número: </label>
        <input type="number" name="segundoNumero" id="segundoNumero"/>
        <br><br>
        <label> Número de busca: </label>
        <input type="number" name="terceiroNumero" id="terceironumero"/>
        <br><br>
        <button type="submit">Calcular
            <?php
                $primeiroNumero = $_POST['primeiroNumero'];
                $segundoNumero = $_POST['segundoNumero'];
                $numero = $_POST['terceiroNumero'];
                $resultado = verificarNumero($primeiroNumero, $segundoNumero, $numero);
            ?>

        </button>
            <?php
                if($resultado == true){
                    echo "O $numero está no intervalo entre $primeiroNumero e $segundoNumero";
                }else{
                    echo "O $numero não está no intervalo entre $primeiroNumero e $segundoNumero";
                }
            ?>
        </form>
</body>
</html>