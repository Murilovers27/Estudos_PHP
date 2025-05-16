<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulações de String</title>
</head>
<body>
      <h1>Nesse exercicio vamos ver maneiras de manipular Strings, algo semelhante ao StringBuilder do java</h1>
      <?php
        //Existem 4 tipos de strings em php, aspas simples, aspas duplas, heredoc e nowdoc;
        //aspas dubpas "";
        //aspas simples '';
        //heredoc <<<;
        //newdoc <<<''; 

        //explicação 

        //dentro das aspas duplas o centeudo dentro deles e interpertato e não apenas mostrado, então emojis passados são como parametros um emoji por exeplo, ele e pasado como \u{1f44b} no cliente sera exibido o emoji, porem no servidor ele sera apenas um texto.

        //As aspas simples não são interpretadas, ou seja, o conteudo dentro delas e apenas mostrado, o php entende que não existe a necessidade de interpretação;

        $Nome = "Rodrigo";
        $Sobrenome = "Nogueira";
        $NomeDeLuta = "Minutauto";

        echo "$nome \"$Sobrenome\" $NomeDeluta";

        //sequencias de escape php

        echo "\n"; //pular linhas
        echo "\t"; //tabulação
        echo "\\"; //exixibir contra barra, por que a contra barra e uma caracter de escape
        echo "\$"; //exibir o sifão, pois ele e reservado para variaveis
        echo "\u{}"; //exbir codificção de emojis por exemplo

        //String heredoc e um super toString

        echo <<< FRASE
        o vasco e um time de merda, so da estresse nessa vida, esta entrando no ostracismo;
          
        
        
      ?>

  
</body>
</html>