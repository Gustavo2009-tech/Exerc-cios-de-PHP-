<?php

    function exercicio01($num1, $num2){
        return "A soma é: ".((int)$num1 + (int)$num2);
    }//fim do Exercício 1

    function subtrair($num1,$num2){
        return "A Subtração é: ".((int)$num1 - (int)$num2);
    }//fim do método

    function multiplicacao($num1,$num2){
        return "A Multiplicação é: ".((int)$num1 * (int)$num2);
    }//fim da multiplicação

    function divisao($num1,$num2){
        if($num2 <= 0){
            return "Impossivel Dividir por zero";
        }else if($num1 < 0 || $num2 <0){
            return "Impossivel dividir por número negativo";
        }else{
            return "A divisão é: ".((int)$num1 / (int)$num2);
        }//fim do if
    }//fim do método

    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossivel calcular a potência!";
        }else{
            return "A Potência é: ".pow((int)$num1, (int)$num2);
        }//fim do if
    }//fim da potencia

    function raiz($num1){
        if($num1 < 0){
            return "Impossivel calcular raiz de número negativo!";
        }else{
            return "A Raiz é: ".srqt((int)$num1);
        }//fim do if
    }//fim do método

    //1. Verifique se um ano é bissexto.
    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 !=0){
            return "O Ano será Bissexto!";
        }else{
            return "O Ano não é bissexto!";
        }
    }//fim do bissexto

    //2.Verificar se um número está entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio;$i <= $fim;$i++){
            if($i == (int) $num){
                return true;
            }
        }//fim do for
        return false;
    }//fim do método
    
    //3. Leia a idade e verifique se pode votar: >16 e <18 facultativo; >=18 obrigatório;
        function podeVotar($idade){
            if($idade >= 16 && $idade < 18){
                return "Você pode votar (voto Facultativo)";
            }else if($idade >= 18){
                return "Você TEM que votar!";
            }else{
                return "Você NÃO PRECISA votar!";
            }
        }

    //5. Leia um número de 1 a 7 e mostre o dia da semana 
    function diaDaSemana($num){
        switch($num){
            case 1:
                return "Domingo";
                break;//Encerra o switch
            case 2: 
                return "Segunda-Feira";
                break;
            case 3:
                return "Terça-Feira";
                break;
            case 4:
                return "Quarta-Feira";
                break;
            case 5:
                return "Quinta-Feira";
                break;
            case 6:
                return "Sexta-Feira";
                break;
            case 7:
                return "Sábado";        
                break;
            default:
                return "O número informado é inválido!";
                break;
            }//fim do switch
    }

    //6. Verifique se uma senha digitada é válida.
    function senhaValida($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Bem-Vindo!";
        }else{
            return "Senha Invalida!";
        }


    }

    //7. Leia 2 horários e determine qual é mais tarde.
    function maiorHorario($primeiro, $segundo){
        if($primeiro > $segundo){
            return "$primeiro é maior que o $segundo";
        }else{
            return "$segundo é maior que o $primeiro";
        }
    }

    //8. Leia 5 números e calcule a média 
    function calcularMedia($primeiro, $segundo, $terceiro, $quarto, $quinto){
        $media = ((int)$primeiro+(int)$segundo+(int)$terceiro+(int)$quarto+(int)$quinto)/5;
        return "A média é: $media";
    }//fim do método

    //9. Leia numeros ate que a soma ultrapasse a 100
    function LerNumerosAte100($primeiro, $segundo, $terceiro, $quarto, $quinto){
        $resultado = ((int)$primeiro + (int)$segundo + (int)$terceiro + (int)$quarto + (int)$quinto);
        return "A soma final é: $resultado";
    }//fim do Ler Numeros

    //10. Solicite senhas ate que uma Senha Válida seja informada
    function SolicitarSenha($senha){
        $senhaBD = 1000;
        if($senhaBD == $senha){
            return "Senha correta!";
        }else{
            return "Senha invalida!";
        }   
    }//fim do Solicitar senha
    
    //11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso.
    function ClassificacaoIdade($idade){
        if($idade <= 12){
            return "é uma Criança";
        }else if ($idade <= 18){
            return "é um/uma jovem";
        }else if ($idade <= 30){
            return "é um/uma adulto/a";
        }else{
            return "é um/uma idoso/a";
        }
    }

    //12. Verifique se um numero é par ou ímpar.
    function VerificarParOuimpar($num){
        if($num %2 == 0){
            return "par";
        }else {
            return "impar";
        }
    }//fim do 12.
    
?>
