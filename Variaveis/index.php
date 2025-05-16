<!DOCTYPE html>
<html lang="pt br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis</title>
</head>
<body>
    <title>Controle de variaveis</title>
    <h1>Nesse exercicio vimos algumas funções e maneiras de declarar varaiveis e constantes</h1>

    <?php
    const NOME = "Murilo Pires";//Constantes são iguais aos publics final no java, ou seja, não podem ser alteradas, e são declarandas com a palvra reservada const, e não com $ com as variaveis; Constantes são imuaveis, variaveis são mutaveis e podem ser alteradas no meio do codigo;


    echo "<p>Meu nome e: " . NOME . "</p>";//Constantes devem ser concatenadas comm o ponto, assim com variaveis padroes em java, php tem elementos de java com java scrpit.


      //Declarações de variaveis, php e uma mistura de java com javaScript, uma liguagem de tipagem fraca, ou seja, não e preciso declarar o tipo da variavel, php faz o trabalho de identifcar o tipo, mas e possivel declarar o tipo primitivo, essa liguagem e uma gambirra pura.
      $nome = "Murilo";
      $idade = 22;
      $altura = 1.80; 
      $media = $altura/2;
      $segundo_nome = "Pires";
      $nome_inteiro = $nome . " " . $segundo_nome;
      //Eu não preciso juntar as variaveis com ou ponto, ou com um concat da vida, posso puxar as duas variavaeis em seguida. 
      
      //com echo eu consigo criar elementos html, como h1, h2, h3, e etc..
      //ou posso simplesmente printar a variavel sem criar um elemento;
      echo "<h1>Muu nome e: $nome_inteiro</h1>";
      echo "<h1>Meu nome e: $nome $segundo_nome</h1>";
      echo "<h2>Minha idade e: $idade</h2>";
      echo "<h3>Minha altura e: $altura</h3>";
      echo "<h4>A media da minha altura e de: $media</h4>";


      date_default_timezone_set('America/Sao_Paulo');
      //O CET e que seria a time zone, vem padronizada com o horario Estadunidense, por isso ele deve ser configuado para o horario de Brasilia, ou seja, GMT -3;
      //Manipulações de funções ja feitas, como o staticSumary em java;


      echo "hoje e dia: " . date("d/m/y");
      echo "Hora atual: " . date("h:i:sa");
      // A função data() e uma funcão que retorna o elemtos de hora e data, requisitadas pelos parametros passados atraves de strings, indo ate milesegundos e dias da semana com segunda, terça e quarta;

    echo "<h1>Tipos de variaveis</h1>";
    $cidade = "RJ"; //String

    $casado = true; //Boolean

    $Filhos = 2; //int ou integer

    $Exadecimal = 0x1A;//Todo numero que começa com 0x e um numero hexadecimal, logo deve ser delcarado com int (int ou integer);

    $Binario = 0b101010;//Todo numero que comaça com 0B e um numero binario, logo e um int/integer;

    $Potencia = 2e3;//Todo numero seguido de e uma potencia, então 2e3 e 2*10*3 ou seja 2000, deve ser amazenado com float;

    var_dump($Filhos); //comanado que mostra o tipo da variavel, o valor primitivo por tras do $
    ?>
     
</body>
</html>